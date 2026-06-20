<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
?>
<header class="fixed top-0 w-full z-50 bg-glass-fill backdrop-blur-md border-b border-glass-border shadow-sm">
    <div class="flex justify-between items-center max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop h-20">
        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-electric-blue" style="font-variation-settings: 'FILL' 1;">terminal</span>
        </div>
        <nav class="hidden md:flex gap-8 items-center">
            <a class="font-label-mono text-label-mono text-electric-blue border-b-2 border-electric-blue pb-1" href="#home">Home</a>
            <a class="font-label-mono text-label-mono text-on-surface-variant hover:text-electric-blue transition-colors duration-300" href="#projects">Projects</a>
            <a class="font-label-mono text-label-mono text-on-surface-variant hover:text-electric-blue transition-colors duration-300" href="#about">About</a>
            <a class="font-label-mono text-label-mono text-on-surface-variant hover:text-electric-blue transition-colors duration-300" href="#contact">Contact</a>
        </nav>
        <button class="md:hidden text-on-surface" id="menu-toggle" aria-label="Open menu" aria-expanded="false">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </div>
</header>

<div class="fixed right-0 h-full w-80 z-[60] bg-surface-container-high backdrop-blur-xl border-l border-glass-border shadow-2xl transition-transform duration-500 ease-in-out translate-x-full" id="drawer" aria-hidden="true">
    <div class="flex flex-col pt-24 px-8 gap-6">
        <button class="self-end mb-8" id="close-drawer" aria-label="Close menu">
            <span class="material-symbols-outlined">close</span>
        </button>
        <a class="flex items-center gap-4 py-4 bg-secondary-container text-on-secondary-container rounded-xl px-4" href="#home">
            <span class="material-symbols-outlined">home</span>
            <span class="font-label-mono text-label-mono">Home</span>
        </a>
        <a class="flex items-center gap-4 py-4 text-on-surface-variant hover:text-on-surface px-4" href="#about">
            <span class="material-symbols-outlined">person</span>
            <span class="font-label-mono text-label-mono">About</span>
        </a>
        <a class="flex items-center gap-4 py-4 text-on-surface-variant hover:text-on-surface px-4" href="#projects">
            <span class="material-symbols-outlined">code</span>
            <span class="font-label-mono text-label-mono">Projects</span>
        </a>
        <a class="flex items-center gap-4 py-4 text-on-surface-variant hover:text-on-surface px-4" href="#services">
            <span class="material-symbols-outlined">terminal</span>
            <span class="font-label-mono text-label-mono">Services</span>
        </a>
        <a class="flex items-center gap-4 py-4 text-on-surface-variant hover:text-on-surface px-4" href="#contact">
            <span class="material-symbols-outlined">mail</span>
            <span class="font-label-mono text-label-mono">Contact</span>
        </a>
    </div>
</div>

<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href && href !== '#') {
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const headerHeight = document.querySelector('header') ? document.querySelector('header').offsetHeight : 70;
                const position = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                window.scrollTo({ top: position, behavior: 'smooth' });
                history.replaceState(null, null, window.location.pathname); // ← Keeps URL clean!
            }
        }
    });
});
