<?php
$page_title = 'Services';
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<main>
    <section class="py-section-gap bg-surface-container-lowest" id="services">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach ($services as $service): ?>
                <div class="glass-card p-10 rounded-2xl glow-hover transition-all scroll-reveal active">
                    <h3 class="font-display-lg text-headline-md mb-4 text-on-surface"><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p class="text-on-surface-variant mb-8 leading-relaxed"><?php echo htmlspecialchars($service['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <ul class="space-y-3">
                        <?php foreach ($service['features'] as $feature): ?>
                        <li class="flex items-center gap-3 text-body-md"><span class="material-symbols-outlined text-electric-blue text-sm">check_circle</span><?php echo htmlspecialchars($feature, ENT_QUOTES, 'UTF-8'); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-16 text-center">
                <a class="px-12 py-5 bg-gradient-to-r from-deep-purple to-electric-blue rounded-full text-white font-label-mono font-bold hover:scale-105 transition-all" href="contact.php">
                    Book a Consultation
                </a>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
