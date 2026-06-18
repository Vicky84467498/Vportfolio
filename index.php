<?php
$page_title = 'Home';
$page_icon = 'terminal';
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
    <section class="relative hero overflow-visible" id="home">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10 w-full">
            <div class="max-w-3xl">
                <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg leading-none mb-6">
                    <span class="block text-on-surface">VICKY MUKESH</span>
                    <span class="gradient-text">METHE</span>
                </h1>
                <div class="mb-8">
                    <span class="typing-effect font-label-mono text-label-mono text-electric-blue uppercase" role="text" aria-live="polite" aria-label="FULL STACK PHP DEVELOPER" data-text="FULL STACK PHP DEVELOPER"></span>
                </div>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-12 max-w-xl">
                    Building scalable solutions with high-tech precision. Crafting digital experiences where performance meets modern software architecture.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 hero-button-group">
                    <a class="px-10 py-5 bg-gradient-to-r from-deep-purple to-electric-blue rounded-full text-white font-label-mono font-bold hover:scale-105 transition-all shadow-[0_0_20px_rgba(74,0,224,0.4)] flex items-center justify-center gap-2" href="https://cdn.discordapp.com/attachments/1343939567253717023/1517245489601319084/Vicky_methe.pdf?ex=6a359479&is=6a3442f9&hm=05f2fc091f1c4dea71476aa48fe8ad7c21ccf8bd4b0ddfe9989fe8b1689c49cb&">
                        <span class="material-symbols-outlined">download</span>
                        Download Resume
                    </a>
                    <a class="px-10 py-5 border border-electric-blue rounded-full text-electric-blue font-label-mono hover:bg-electric-blue/10 transition-all flex items-center justify-center" href="#projects">
                        Explore Projects
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
            <span class="material-symbols-outlined text-outline text-3xl">expand_more</span>
        </div>
    </section>

    <section class="py-12 bg-surface-container-lowest border-y border-glass-border overflow-hidden">
        <div class="scrolling-wrapper">
            <div class="flex gap-12 items-center px-6">
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>PHP 8.2</span>
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>MYSQL</span>
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>LARAVEL</span>
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>REST_APIs</span>
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>JAVASCRIPT</span>
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>BOOTSTRAP_5</span>
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>AWS_DEPLOY</span>
            </div>
            <div class="flex gap-12 items-center px-6">
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>PHP 8.2</span>
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>MYSQL</span>
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>LARAVEL</span>
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>REST_APIs</span>
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>JAVASCRIPT</span>
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>BOOTSTRAP_5</span>
                <span class="font-label-mono text-on-surface-variant text-xl flex items-center gap-4"><span class="text-electric-blue">#</span>AWS_DEPLOY</span>
            </div>
        </div>
    </section>

    <section class="py-section-gap relative" id="projects">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div>
                    <h2 class="font-label-mono text-electric-blue mb-4 uppercase tracking-widest">Featured Execution</h2>
                    <h3 class="font-display-lg text-headline-md md:text-5xl text-on-surface">Systems That Scale</h3>
                </div>
                <div class="h-px bg-glass-border flex-grow mx-8 mb-6 hidden md:block"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center scroll-reveal active">
                <div class="md:col-span-7 rounded-2xl overflow-hidden glass-card group cursor-pointer relative aspect-video">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="A professional logistics dashboard screenshot" src="<?php echo htmlspecialchars($projects[0]['image'], ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="absolute inset-0 bg-gradient-to-t from-charcoal-black via-transparent to-transparent opacity-60"></div>
                </div>
                <div class="md:col-span-5 md:-ml-20 z-10">
                    <div class="glass-card p-10 rounded-2xl glow-hover transition-all">
                        <h4 class="font-display-lg text-headline-md mb-4 text-on-surface"><?php echo htmlspecialchars($projects[0]['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                        <p class="text-on-surface-variant mb-8 leading-relaxed"><?php echo htmlspecialchars($projects[0]['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center gap-3 text-body-md"><span class="material-symbols-outlined text-electric-blue text-sm">check_circle</span>Dynamic Tracking Engine</li>
                            <li class="flex items-center gap-3 text-body-md"><span class="material-symbols-outlined text-electric-blue text-sm">check_circle</span>Role-Based Access Control</li>
                            <li class="flex items-center gap-3 text-body-md"><span class="material-symbols-outlined text-electric-blue text-sm">check_circle</span>Automated PDF Invoicing</li>
                        </ul>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <?php foreach ($projects[0]['tags'] as $tag): ?>
                            <span class="px-4 py-1.5 rounded-full bg-electric-blue/10 border border-electric-blue/20 text-electric-blue font-label-mono text-xs"><?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a class="inline-flex items-center gap-2 text-on-surface font-label-mono hover:text-electric-blue transition-colors group" href="#">
                            View Case Study
                            <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <div class="md:col-span-7 rounded-2xl overflow-hidden glass-card group cursor-pointer relative aspect-video mt-12 md:mt-24">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="<?php echo htmlspecialchars($projects[1]['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($projects[1]['title'], ENT_QUOTES, 'UTF-8'); ?> illustration">
                    <div class="absolute inset-0 bg-gradient-to-t from-charcoal-black via-transparent to-transparent opacity-60"></div>
                </div>
                    <div class="md:col-span-5 md:-ml-12 z-10 mt-4 md:mt-16">
                    <div class="glass-card p-10 rounded-2xl glow-hover transition-all">
                        <h4 class="font-display-lg text-headline-md mb-4 text-on-surface">Enterprise API Gateway</h4>
                        <p class="text-on-surface-variant mb-8 leading-relaxed">A high-performance middleware solution for managing microservices communication. Features rate limiting, authentication, and real-time monitoring.</p>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <?php foreach ($projects[1]['tags'] as $tag): ?>
                            <span class="px-4 py-1.5 rounded-full bg-electric-blue/10 border border-electric-blue/20 text-electric-blue font-label-mono text-xs"><?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a class="inline-flex items-center gap-2 text-on-surface font-label-mono hover:text-electric-blue transition-colors group" href="#">
                            View Details
                            <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <div class="md:col-span-7 rounded-2xl overflow-hidden glass-card group cursor-pointer relative aspect-video mt-12 md:mt-24">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="<?php echo htmlspecialchars($projects[2]['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($projects[2]['title'], ENT_QUOTES, 'UTF-8'); ?> illustration">
                    <div class="absolute inset-0 bg-gradient-to-t from-charcoal-black via-transparent to-transparent opacity-60"></div>
                </div>
                    <div class="md:col-span-5 md:-ml-12 z-10 mt-4 md:mt-16">
                    <div class="glass-card p-10 rounded-2xl glow-hover transition-all">
                        <h4 class="font-display-lg text-headline-md mb-4 text-on-surface">Inventory Intelligence</h4>
                        <p class="text-on-surface-variant mb-8 leading-relaxed">Smart inventory management system with predictive stock analysis and automated supplier integration for retail chains.</p>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <?php foreach ($projects[2]['tags'] as $tag): ?>
                            <span class="px-4 py-1.5 rounded-full bg-electric-blue/10 border border-electric-blue/20 text-electric-blue font-label-mono text-xs"><?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a class="inline-flex items-center gap-2 text-on-surface font-label-mono hover:text-electric-blue transition-colors group" href="#">
                            View Details
                            <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <div class="md:col-span-7 rounded-2xl overflow-hidden glass-card group cursor-pointer relative aspect-video mt-12 md:mt-24">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="<?php echo htmlspecialchars($projects[3]['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($projects[3]['title'], ENT_QUOTES, 'UTF-8'); ?> illustration">
                    <div class="absolute inset-0 bg-gradient-to-t from-charcoal-black via-transparent to-transparent opacity-60"></div>
                </div>
                    <div class="md:col-span-5 md:-ml-12 z-10 mt-4 md:mt-16">
                    <div class="glass-card p-10 rounded-2xl glow-hover transition-all">
                        <h4 class="font-display-lg text-headline-md mb-4 text-on-surface">SaaS Billing Engine</h4>
                        <p class="text-on-surface-variant mb-8 leading-relaxed">A robust subscription management and billing engine supporting multiple payment gateways and complex tax calculations.</p>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <?php foreach ($projects[3]['tags'] as $tag): ?>
                            <span class="px-4 py-1.5 rounded-full bg-electric-blue/10 border border-electric-blue/20 text-electric-blue font-label-mono text-xs"><?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a class="inline-flex items-center gap-2 text-on-surface font-label-mono hover:text-electric-blue transition-colors group" href="#">
                            View Details
                            <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-section-gap bg-surface-container-lowest" id="about">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-24 items-center">
                <div class="relative scroll-reveal active">
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-deep-purple/20 blur-3xl rounded-full"></div>
                    <div class="glass-card p-4 rounded-3xl relative overflow-hidden aspect-[4/5]">
                        <img class="w-full h-full object-cover rounded-2xl grayscale hover:grayscale-0 transition-all duration-700" alt="Portrait of a software engineer in a modern dark studio" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoBcJSPh5rbJccvpTvNGs7gu-o3KfgzA6YAD9qJAcenAfR50zQsc-Z4yWO-bIe1XMDkKCs8tvfOcF02pejORvKwo4cJe91kG6ZEBiWpSKm7BUj_jvKXioMQorBeL5_G97pVRqP3lGYEeLqa6LQvj033JX6nwNeCXvAhd2ba7ut0YU_ClH0OZp8GMjOAAXmbRijeZyCdttvsgkEEsX_pNi58n-jDya9flirJDUU7EhDrnuuBmpwZqzuaWnja7AzNzo-Fgk6G-3TCAEw">
                    </div>
                    <div class="absolute -bottom-6 -right-6 glass-card px-8 py-6 rounded-2xl">
                        <span class="block font-display-lg text-4xl text-electric-blue">2+</span>
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
                    <a class="inline-flex items-center gap-3 px-8 py-4 bg-glass-fill border border-glass-border rounded-xl font-label-mono hover:border-electric-blue hover:bg-electric-blue/5 transition-all" href="#contact">
                        More About My Story
                        <span class="material-symbols-outlined">north_east</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-section-gap" id="services">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="glass-card p-12 md:p-20 rounded-[3rem] text-center relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-electric-blue/10 blur-[100px] rounded-full"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-deep-purple/10 blur-[100px] rounded-full"></div>
                <h2 class="font-display-lg text-headline-md md:text-6xl text-on-surface mb-8">Have a project in mind?</h2>
                <p class="text-body-lg text-on-surface-variant mb-12 max-w-2xl mx-auto">
                    I'm currently available for freelance projects and full-time collaborations. Let's build something exceptional together.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center relative z-10">
                    <a class="px-12 py-5 bg-on-surface text-charcoal-black font-bold rounded-full hover:scale-105 transition-all" href="mailto:contact@vickymethe.com">
                        Start Conversation
                    </a>
                    <a class="px-12 py-5 border border-glass-border rounded-full text-on-surface hover:bg-glass-fill transition-all" href="#contact">
                        Schedule a Call
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-section-gap" id="contact">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="glass-card p-10 rounded-3xl bg-surface-container-high">
                <h2 class="font-label-mono text-electric-blue uppercase tracking-widest mb-4">Contact</h2>
                <p class="text-body-lg text-on-surface-variant mb-8">Send a message to discuss your next project or request a consultation.</p>
                <?php if ($contact_message): ?>
                    <div id="serverMessage" class="form-message <?php echo $contact_success ? 'success' : 'error'; ?> show" role="status" aria-live="polite"><?php echo htmlspecialchars($contact_message, ENT_QUOTES, 'UTF-8'); ?></div>
                <?php endif; ?>
                <form id="contactForm" method="POST" action="index.php#contact" class="grid grid-cols-1 gap-6">
                    <input type="hidden" name="contact_form" value="1">
                    <div>
                        <label for="name" class="sr-only">Name</label>
                        <input id="name" name="name" type="text" placeholder="Your Name" required minlength="3" class="w-full rounded-2xl px-5 py-4" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                    </div>
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" name="email" type="email" placeholder="Your Email" required class="w-full rounded-2xl px-5 py-4" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                    </div>
                    <div>
                        <label for="message" class="sr-only">Message</label>
                        <textarea id="message" name="message" rows="6" placeholder="Your Message" required minlength="10" class="w-full rounded-2xl px-5 py-4"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
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

<div class="fixed bottom-8 right-8 flex flex-col gap-4 z-40">
    <button class="bg-surface-container-highest p-4 rounded-full text-on-surface hover:scale-110 transition-all duration-300 shadow-xl group" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" aria-label="Scroll to top">
        <span class="material-symbols-outlined">arrow_upward</span>
    </button>
    <a class="bg-gradient-to-tr from-deep-purple to-electric-blue p-4 rounded-full shadow-[0_0_20px_rgba(0,212,255,0.3)] animate-pulse-slow hover:scale-110 transition-all duration-300 flex items-center justify-center"
   href="https://wa.me/917498510982"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="Chat on WhatsApp">

    <span class="material-symbols-outlined text-white"
          style="font-variation-settings: 'FILL' 1;">
        chat
    </span>

</a>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
