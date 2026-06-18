<?php
$page_title = 'About';
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<main>
    <section class="py-section-gap bg-surface-container-lowest" id="about">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-24 items-center">
                <div class="relative scroll-reveal active">
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-deep-purple/20 blur-3xl rounded-full"></div>
                    <div class="glass-card p-4 rounded-3xl relative overflow-hidden aspect-[4/5]">
                        <img class="w-full h-full object-cover rounded-2xl grayscale hover:grayscale-0 transition-all duration-700" alt="Portrait of a software engineer in a modern dark studio" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoBcJSPh5rbJccvpTvNGs7gu-o3KfgzA6YAD9qJAcenAfR50zQsc-Z4yWO-bIe1XMDkKCs8tvfOcF02pejORvKwo4cJe91kG6ZEBiWpSKm7BUj_jvKXioMQorBeL5_G97pVRqP3lGYEeLqa6LQvj033JX6nwNeCXvAhd2ba7ut0YU_ClH0OZp8GMjOAAXmbRijeZyCdttvsgkEEsX_pNi58n-jDya9flirJDUU7EhDrnuuBmpwZqzuaWnja7AzNzo-Fgk6G-3TCAEw">
                    </div>
                    <div class="absolute -bottom-6 -right-6 glass-card px-8 py-6 rounded-2xl">
                        <span class="block font-display-lg text-4xl text-electric-blue">5+</span>
                        <span class="font-label-mono text-xs text-on-surface-variant uppercase">Years Experience</span>
                    </div>
                </div>
                <div class="scroll-reveal active">
                    <h2 class="font-label-mono text-electric-blue mb-4 uppercase tracking-widest">Architecting Logic</h2>
                    <h3 class="font-display-lg text-headline-md md:text-5xl text-on-surface mb-8">Beyond The Code</h3>
                    <p class="text-body-lg text-on-surface-variant mb-6 leading-relaxed">
                        I specialize in bridging the gap between complex business logic and intuitive digital interfaces. My approach focuses on writing clean, maintainable PHP code that powers robust backend systems while maintaining high frontend performance.
                    </p>
                    <p class="text-body-lg text-on-surface-variant mb-12 leading-relaxed">
                        Whether it's optimizing database queries or designing scalable modular architectures, my goal is to build software that creates tangible value.
                    </p>
                    <a class="inline-flex items-center gap-3 px-8 py-4 bg-glass-fill border border-glass-border rounded-xl font-label-mono hover:border-electric-blue hover:bg-electric-blue/5 transition-all" href="contact.php">
                        More About My Story
                        <span class="material-symbols-outlined">north_east</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
