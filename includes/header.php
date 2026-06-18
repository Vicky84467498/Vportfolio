<?php
if (!defined('SITE_TITLE')) {
    require_once __DIR__ . '/config.php';
}
?>
<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars(SITE_DESCRIPTION, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="Vicky Mukesh Methe, Full Stack PHP Developer, Courier Management System, Web Architect, Software Engineer">
    <meta name="author" content="<?php echo htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0A0A0A">

    <meta property="og:title" content="<?php echo htmlspecialchars(SITE_TITLE, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars(SITE_DESCRIPTION, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars(SITE_URL . $_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars(SITE_URL, ENT_QUOTES, 'UTF-8'); ?>/assets/images/og-image.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars(SITE_TITLE, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars(SITE_DESCRIPTION, ENT_QUOTES, 'UTF-8'); ?>">

    <title><?php echo isset($page_title) ? htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') . ' | ' . htmlspecialchars(SITE_TITLE, ENT_QUOTES, 'UTF-8') : htmlspecialchars(SITE_TITLE, ENT_QUOTES, 'UTF-8'); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@600;800&family=Inter:wght@400;500&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <script src="./assets/js/tailwind-config.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/layout.css">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Vicky Mukesh Methe",
      "jobTitle": "Full Stack PHP Developer",
      "url": "<?php echo htmlspecialchars(SITE_URL, ENT_QUOTES, 'UTF-8'); ?>",
      "sameAs": [
        "https://github.com/vickymethe",
        "https://linkedin.com/in/vickymethe"
      ],
      "knowsAbout": ["PHP", "MySQL", "Web Development", "Software Architecture", "Courier Systems"]
    }
    </script>
</head>
<body class="font-body-md selection:bg-electric-blue/30">
