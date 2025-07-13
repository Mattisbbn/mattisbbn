<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Mattis Babin | Développeur Web' ?></title>
    <meta name='language' content='FR'>
    <meta name='author' content='Mattis Babin'>
    <meta name='copyright' content='Mattis Babin'>
    <meta name='designer' content='Mattis Babin'>
    <meta name='publisher' content='Mattis Babin'>
    <meta name='rating' content='general'>
    <meta name="keywords" content="Mattis Babin, Développeur web, Laravel, Vue.js, React, React Native, Next.js, Tailwind, Git, MariaDB, PHP, JavaScript, HTML, CSS">

    <link rel="canonical" href="https://mattisbabin.fr" />

    <!-- Primary Meta Tags -->
    <title>Mattis Babin | Développeur web | Laravel & Vue.js</title>
    <meta name="title" content="Mattis Babin | Développeur web | Laravel & Vue.js" />
    <meta name="description" content="Étudiant en Bachelor CDA dès septembre, je recherche une alternance en développement web. Spécialisé Laravel & Vue.js." />
    <meta name="canonical" content="https://mattisbabin.fr" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="mattisbabin.fr" />
    <meta property="og:title" content="Mattis Babin | Développeur web | Laravel & Vue.js" />
    <meta property="og:description" content="Étudiant en Bachelor CDA dès septembre, je recherche une alternance en développement web. Spécialisé Laravel & Vue.js." />
    <meta property="og:image" content="https://mattisbabin.fr/assets/images/meta-banner.png" />

    <!-- X (Twitter) -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="mattisbabin.fr" />
    <meta property="twitter:title" content="Mattis Babin | Développeur web | Laravel & Vue.js" />
    <meta property="twitter:description" content="Étudiant en Bachelor CDA dès septembre, je recherche une alternance en développement web. Spécialisé Laravel & Vue.js." />
    <meta property="twitter:image" content="https://mattisbabin.fr/assets/images/meta-banner.png" />

    <link rel="icon" type="image/png" href="/assets/images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/assets/images/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/assets/images/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Mattis Babin | Développeur web" />
    <link rel="manifest" href="/assets/images/favicon/site.webmanifest" />
    <?= vite('main.js') ?>

    <?php if(isset($js)): ?>
        <?php foreach($js as $script): ?>
            <?= vite($script) ?>
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>