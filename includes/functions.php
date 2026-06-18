<?php
/**
 * Helper Functions
 * Reusable functions for sanitization, contact handling, and database access.
 */

if (!defined('SITE_URL')) {
    require_once __DIR__ . '/config.php';
}

function get_current_page(): string
{
    return basename($_SERVER['PHP_SELF'], '.php');
}

function html_escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function sanitize_input($input)
{
    if (is_array($input)) {
        return array_map('sanitize_input', $input);
    }

    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

function is_valid_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function is_ajax_request(): bool
{
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

function db_connect(): ?PDO
{
    try {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_PERSISTENT => false,
        ]);
        return $pdo;
    } catch (PDOException $exception) {
        return null;
    }
}

function save_contact_submission(string $name, string $email, string $message): bool
{
    $pdo = db_connect();
    if (!$pdo) {
        return false;
    }

    $sql = 'INSERT INTO contacts (name, email, message, created_at) VALUES (:name, :email, :message, NOW())';
    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':message' => $message,
    ]);
}

function send_contact_email(string $name, string $email, string $message): bool
{
    $subject = 'New Contact Form Submission from ' . $name;

    $body = "Hello,\n\n";
    $body .= "You have received a new message from your portfolio website.\n\n";
    $body .= "Name: {$name}\n";
    $body .= "Email: {$email}\n\n";
    $body .= "Message:\n{$message}\n\n";
    $body .= "---\nThis email was sent from your portfolio website.\n";

    $headers = 'From: ' . SITE_EMAIL . '\r\n';
    $headers .= 'Reply-To: ' . $email . '\r\n';
    $headers .= 'Content-Type: text/plain; charset=UTF-8\r\n';

    return mail(ADMIN_EMAIL, $subject, $body, $headers);
}

function validate_contact_form(string $name, string $email, string $message): array
{
    $errors = [];

    if (empty($name)) {
        $errors[] = 'Name is required.';
    } elseif (mb_strlen($name) < 3) {
        $errors[] = 'Name must be at least 3 characters long.';
    } elseif (mb_strlen($name) > 100) {
        $errors[] = 'Name must not exceed 100 characters.';
    }

    if (empty($email)) {
        $errors[] = 'Email is required.';
    } elseif (!is_valid_email($email)) {
        $errors[] = 'Please enter a valid email address.';
    }

    if (empty($message)) {
        $errors[] = 'Message is required.';
    } elseif (mb_strlen($message) < 10) {
        $errors[] = 'Message must be at least 10 characters long.';
    } elseif (mb_strlen($message) > 5000) {
        $errors[] = 'Message must not exceed 5000 characters.';
    }

    return $errors;
}

function get_year(): string
{
    return date('Y');
}

function set_active_link(string $page): string
{
    return get_current_page() === $page ? 'text-electric-blue border-b-2 border-electric-blue pb-1' : 'text-on-surface-variant hover:text-electric-blue transition-colors duration-300';
}
