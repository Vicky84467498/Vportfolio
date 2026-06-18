<?php
$page_title = 'Projects';
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<main>
    <section class="py-section-gap relative" id="projects">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div>
                    <h2 class="font-label-mono text-electric-blue mb-4 uppercase tracking-widest">Featured Execution</h2>
                    <h3 class="font-display-lg text-headline-md md:text-5xl text-on-surface">Systems That Scale</h3>
                </div>
                <div class="h-px bg-glass-border flex-grow mx-8 mb-6 hidden md:block"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
                <?php foreach ($projects as $project): ?>
                <div class="md:col-span-6 rounded-2xl overflow-hidden glass-card group cursor-pointer relative aspect-[16/9]">
                    <?php if (!empty($project['image'])): ?>
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="<?php echo htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8'); ?>" src="<?php echo htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8'); ?>">
                    <?php else: ?>
                        <div class="w-full h-full bg-surface-container-highest flex items-center justify-center">
                            <span class="material-symbols-outlined text-6xl text-outline opacity-20">image</span>
                        </div>
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-gradient-to-t from-charcoal-black via-transparent to-transparent opacity-60"></div>
                </div>
                <div class="md:col-span-6">
                    <div class="glass-card p-10 rounded-2xl glow-hover transition-all">
                        <h4 class="font-display-lg text-headline-md mb-4 text-on-surface"><?php echo htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                        <p class="text-on-surface-variant mb-8 leading-relaxed"><?php echo htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <div class="flex flex-wrap gap-2 mb-8">
                            <?php foreach ($project['tags'] as $tag): ?>
                            <span class="px-4 py-1.5 rounded-full bg-electric-blue/10 border border-electric-blue/20 text-electric-blue font-label-mono text-xs"><?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a class="inline-flex items-center gap-2 text-on-surface font-label-mono hover:text-electric-blue transition-colors group" href="project.php?id=<?php echo $project['id']; ?>">
                            View Details
                            <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">arrow_forward</span>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
