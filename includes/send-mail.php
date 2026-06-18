<?php
header('Content-Type: application/json');

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([ 'success' => false, 'message' => 'Method not allowed. Use POST.' ]);
    exit;
}

$name = sanitize_input($_POST['name'] ?? '');
$email = sanitize_input($_POST['email'] ?? '');
$message = sanitize_input($_POST['message'] ?? '');

$errors = validate_contact_form($name, $email, $message);

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([ 'success' => false, 'errors' => $errors ]);
    exit;
}

$submissionSaved = save_contact_submission($name, $email, $message);
$emailSent = send_contact_email($name, $email, $message);

if ($emailSent) {
    http_response_code(200);
    echo json_encode([ 'success' => true, 'message' => 'Message sent successfully! Thank you for reaching out.' ]);
    exit;
}

http_response_code(500);
echo json_encode([ 'success' => false, 'message' => 'Unable to send email at this time. Please try again later.' ]);
exit;
