<?php
/**
 * Configuration File
 * Site settings, project data, and database configuration.
 */

// ------------------------------------------------------------
// SITE SETTINGS
// ------------------------------------------------------------
define('SITE_NAME', 'VICKY MUKESH METHE');
define('SITE_TITLE', 'Vicky Mukesh Methe | Full Stack PHP Developer & Software Architect');
define('SITE_DESCRIPTION', 'Portfolio of Vicky Mukesh Methe, a Full Stack PHP Developer specializing in scalable web solutions, Courier Management Systems, and high-performance applications.');
define('SITE_EMAIL', 'methevicky14@gmail.com');
define('ADMIN_EMAIL', 'methevicky14@gmail.com');

// ------------------------------------------------------------
// SITE URL
// ------------------------------------------------------------
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
define('SITE_URL', rtrim($scheme . '://' . $_SERVER['HTTP_HOST'], '/'));

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'portfolio');
define('DB_USER', 'root');
define('DB_PASS', '');

// ------------------------------------------------------------
// SOCIAL LINKS
// ------------------------------------------------------------
$social_links = [
    'github' => 'https://github.com/Vicky84467498',
    'linkedin' => 'https://www.linkedin.com/in/vicky-methe-a77b9b303/',
    'twitter' => 'https://x.com/Vishnnu43',
    'email' => 'mailto:methevicky14@gmail.com?subject=Project%20Inquiry'
];

// ------------------------------------------------------------
// PROJECTS DATA
// ------------------------------------------------------------
$projects = [
    [
        'title' => 'Courier Management System',
        'description' => 'An end-to-end logistics platform designed for high-concurrency shipment tracking, real-time analytics, and automated invoice generation.',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBaacgGAPpeHpceXlx-2FZwSqPTwLqg3LXEXYXKJlLigOUr-v58VEKAj2rXfbasgQ5NpUw5vKliAozM_L5J_wy5BmI8-CmFwZpoKwi9CUQyWozsG6hn6OS412-4z7EPXWrX75pJh9n-lgGKJhjjgMV8xcLfFOMCyXFK9k012hvYu-PogoI-d2POnO_yXqDLUJaHrzMX0thRskAO8ogwUEkADQS1L0VQMDUG9M1O_u0yB39jtGuMEwflHUSQGtagVaeFOv1-6deZmJ3l',
        'tags' => ['PHP', 'MySQL', 'Bootstrap 5', 'jQuery']
    ],
    [
        'title' => 'Enterprise API Gateway',
        'description' => 'A high-performance middleware solution for managing microservices communication with rate limiting, authentication, and monitoring.',
        'image' => '/assets/images/Enterprice api .png',
        'tags' => ['Laravel', 'Redis', 'Docker']
    ],
    [
        'title' => 'Inventory Intelligence',
        'description' => 'Smart inventory management system with predictive stock analysis and automated supplier integration for retail chains.',
        'image' => '/assets/images/Invertory.png',
        'tags' => ['PHP 8.2', 'MySQL', 'Chart.js']
    ],
    [
        'title' => 'SaaS Billing Engine',
        'description' => 'A robust subscription management and billing engine supporting multiple payment gateways and complex tax calculations.',
        'image' => '/assets/images/Saas.png',
        'tags' => ['Stripe API', 'Laravel', 'Vue.js']
    ]
];

// ------------------------------------------------------------
// SERVICES DATA
// ------------------------------------------------------------
$services = [
    [
        'title' => 'Custom PHP Applications',
        'description' => 'Building scalable, secure, and maintainable PHP applications for enterprise and small business use.',
        'features' => ['API Development', 'Database Design', 'Authentication', 'Performance Optimization']
    ],
    [
        'title' => 'Courier & Logistics Systems',
        'description' => 'End-to-end logistics platforms with shipment tracking, dashboards, automation, and reporting.',
        'features' => ['Real-time Tracking', 'Route Planning', 'Invoice Automation', 'Role-Based Access']
    ],
    [
        'title' => 'Backend Architecture',
        'description' => 'Designing solid backend systems for microservices, integration, and cloud-ready deployments.',
        'features' => ['REST APIs', 'Data Security', 'Scaling Strategy', 'CI/CD Support']
    ],
    [
        'title' => 'UX-Focused Web Interfaces',
        'description' => 'Creating responsive interfaces with a polished, modern aesthetic while preserving accessibility and speed.',
        'features' => ['Mobile Friendly', 'Accessibility', 'Interactive Animations', 'Consistency']
    ]
];
