<?php
$page_title = 'Contact';
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
$contact_success = false;
$contact_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    $name = sanitize_input($_POST['name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $message = sanitize_input($_POST['message'] ?? '');
    $errors = validate_contact_form($name, $email, $message);
    if (empty($errors)) {
        save_contact_submission($name, $email, $message);
        send_contact_email($name, $email, $message);
        $contact_success = true;
        $contact_message = 'Message sent successfully! I will contact you soon.';
    } else {
        $contact_message = implode(' ', $errors);
    }
}
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<main>
    <section class="py-section-gap" id="contact">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="glass-card p-10 rounded-3xl bg-surface-container-high contact-container">
                <h2 class="font-label-mono text-electric-blue uppercase tracking-widest mb-4">Contact</h2>
                <p class="text-body-lg text-on-surface-variant mb-8">Send a message to discuss your next project or request a consultation.</p>
                <?php if ($contact_message): ?>
                    <div id="serverMessage" class="form-message <?php echo $contact_success ? 'success' : 'error'; ?> show" role="status" aria-live="polite"><?php echo htmlspecialchars($contact_message, ENT_QUOTES, 'UTF-8'); ?></div>
                <?php endif; ?>
                <form id="contactForm" method="POST" action="contact.php" class="contact-form">
                    <input type="hidden" name="contact_form" value="1">
                    <div>
                        <label for="name" class="sr-only">Name</label>
                        <input id="name" name="name" type="text" placeholder="Your Name" required minlength="3" aria-required="true" aria-label="Your Name" class="w-full rounded-2xl px-5 py-4" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                    </div>
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" name="email" type="email" placeholder="Your Email" required aria-required="true" aria-label="Your Email" class="w-full rounded-2xl px-5 py-4" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                    </div>
                    <div>
                        <label for="message" class="sr-only">Message</label>
                        <textarea id="message" name="message" rows="6" placeholder="Your Message" required minlength="10" aria-required="true" aria-label="Your Message" class="w-full rounded-2xl px-5 py-4"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                    </div>
                    <div class="contact-actions">
                        <button type="submit" class="px-10 py-5 rounded-full text-white font-label-mono font-bold" aria-live="polite">
                            <span class="btn-text">Send Message</span>
                            <span class="btn-spinner" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
