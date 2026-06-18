<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

$githubLink = $social_links['github'] ?? '#';
$linkedinLink = $social_links['linkedin'] ?? '#';
$twitterLink = $social_links['twitter'] ?? '#';
$emailLink = $social_links['email'] ?? 'mailto:' . htmlspecialchars(SITE_EMAIL, ENT_QUOTES, 'UTF-8');
?>
<footer class="relative w-full py-section-gap bg-charcoal-black border-t border-glass-border">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="md:col-span-5">
            <div class="flex items-center gap-3 mb-8">
                <span class="material-symbols-outlined text-electric-blue" style="font-variation-settings: 'FILL' 1;">terminal</span>
                <span class="font-display-lg text-headline-md text-on-surface"><?php echo htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
            <p class="text-on-surface-variant max-w-sm mb-8 leading-relaxed"><?php echo htmlspecialchars(SITE_DESCRIPTION, ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <div class="md:col-span-2">
            <h5 class="font-label-mono text-electric-blue uppercase mb-6">Navigation</h5>
            <ul class="space-y-4">
                <li><a class="text-outline hover:text-primary transition-all" href="index.php#home">Home</a></li>
                <li><a class="text-outline hover:text-primary transition-all" href="index.php#projects">Projects</a></li>
                <li><a class="text-outline hover:text-primary transition-all" href="index.php#about">About</a></li>
            </ul>
        </div>
        <div class="md:col-span-2">
            <h5 class="font-label-mono text-electric-blue uppercase mb-6">Social</h5>
            <ul class="space-y-4">
                <li><a class="text-outline hover:text-primary transition-all" href="<?php echo htmlspecialchars($githubLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer">GitHub</a></li>
                <li><a class="text-outline hover:text-primary transition-all" href="<?php echo htmlspecialchars($linkedinLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer">LinkedIn</a></li>
                <li><a class="text-outline hover:text-primary transition-all" href="<?php echo htmlspecialchars($twitterLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer">Twitter</a></li>
            </ul>
        </div>
        <div class="md:col-span-3">
            <h5 class="font-label-mono text-electric-blue uppercase mb-6">Legal</h5>
            <ul class="space-y-4 mb-8">
                <li><a class="text-outline hover:text-primary transition-all" href="#">Privacy Policy</a></li>
                <li><a class="text-outline hover:text-primary transition-all" href="#">Terms of Service</a></li>
                <li><a class="text-outline hover:text-primary transition-all" href="#">Open Source</a></li>
            </ul>
        </div>
        <div class="md:col-span-12 pt-12 border-t border-glass-border/30 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-body-md text-outline">© <?php echo date('Y'); ?> <?php echo htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8'); ?>. Built with precision.</p>
            <div class="flex gap-8">
                <span class="text-outline text-xs uppercase tracking-widest">Designed with Purpose</span>
                <span class="text-outline text-xs uppercase tracking-widest">Powered by PHP</span>
            </div>
        </div>
    </div>
</footer>
<script defer src="/assets/js/script.js"></script>
</body>
</html>
