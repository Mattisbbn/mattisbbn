<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Mattis Babin | Développeur Web' ?></title>
    <?= vite('main.js') ?>

    <?php if(isset($js)): ?>
        <?php foreach($js as $script): ?>
            <?= vite($script) ?>
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>