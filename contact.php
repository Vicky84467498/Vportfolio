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
                <!-- Client/server feedback element (used by JS and server responses) -->
                <div id="formMessage" class="form-message" role="status" aria-live="polite" style="display:none"></div>
                <?php if ($contact_message): ?>
                    <script>document.addEventListener('DOMContentLoaded', function(){
                        var el = document.getElementById('formMessage'); if(el){ el.innerHTML = <?php echo json_encode($contact_message); ?>; el.className = 'form-message <?php echo $contact_success ? 'success' : 'error'; ?> show'; el.style.display = 'block'; }
                    });</script>
                <?php endif; ?>

                <form id="contactForm" method="POST" action="contact.php" class="contact-form" novalidate aria-describedby="formMessage">
                    <input type="hidden" name="contact_form" value="1">

                    <div class="contact-grid">
                        <div class="field">
                            <label for="name" class="sr-only">Name</label>
                            <input id="name" name="name" type="text" placeholder="Your Name" required minlength="3" aria-required="true" aria-label="Your Name" class="input-field" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                            <div id="error-name" class="field-error" aria-live="polite"></div>
                        </div>

                        <div class="field">
                            <label for="email" class="sr-only">Email</label>
                            <input id="email" name="email" type="email" placeholder="Your Email" required aria-required="true" aria-label="Your Email" class="input-field" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                            <div id="error-email" class="field-error" aria-live="polite"></div>
                        </div>

                        <div class="field">
                            <label for="message" class="sr-only">Message</label>
                            <textarea id="message" name="message" placeholder="Your Message" required minlength="10" aria-required="true" aria-label="Your Message" class="textarea-field"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                            <div id="error-message" class="field-error" aria-live="polite"></div>
                        </div>
                    </div>

                    <div class="contact-actions">
                        <button type="submit" class="btn-cta" aria-live="polite">
                            <span class="btn-inner">
                                <svg class="btn-send-icon" width="16" height="16" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M2 21l21-9L2 3v7l15 2-15 2v7z"></path></svg>
                                <svg class="btn-spinner" width="18" height="18" viewBox="0 0 50 50" aria-hidden="true" focusable="false"><circle cx="25" cy="25" r="20" fill="none" stroke-width="4" stroke="#fff" stroke-linecap="round" stroke-dasharray="31.4 31.4" transform="rotate(-90 25 25)"></circle></svg>
                                <span class="btn-text">Send Message</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
