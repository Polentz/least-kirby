<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if($page->isHomePage()) : ?>
        <title><?= $site->title()->lower() ?> - <?= $site->subtitle()->lower() ?></title>
    <?php else : ?>
        <title><?= $site->title()->lower() ?> - <?= $page->title()->lower() ?></title>
    <?php endif ?>

    <meta name="description"
        content="<?= $site->description() ?>">
    <link rel="canonical" href="<?= $page->url() ?>">
    <meta name="keywords"
        content="<?= $site->keywords() ?>">
    <meta property="og:locale" content="<?= $langCode ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="least">
    <meta property="og:description"
        content="<?= $site->description() ?>">
    <meta property="og:url" content="<?= $page->url() ?>">
    <meta property="og:site_name" content="least">
    <?php if($cover = $site->file('least-mold.jpg')): ?>
        <meta property="og:image" content="<?= $cover->url() ?>">
    <?php endif ?>
    <meta property="og:image:alt" content="Identité visuelle de least avec un collage d'images de moisissures">
    <?php if($cover = $site->file('least-mold.jpg')): ?>
        <meta property="og:image:secure_url" content="<?= $cover->url() ?>">
    <?php endif ?>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description"
        content="<?= $site->description() ?>">
    <meta name="twitter:title"
        content="<?= $site->description() ?>">
    <?php if($cover = $site->file('least-mold.jpg')): ?>
        <meta name="twitter:image" content="<?= $cover->url() ?>">
    <?php endif ?>

    <meta name="twitter:image:alt" content="Identité visuelle de least avec un collage d'images de moisissures">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="shortcut icon" type="image/png" sizes="48x48" href="/assets/favicon/least-favicon-48.png">
    <link rel="shortcut icon" type="image/png" sizes="192x192" href="/assets/favicon/least-favicon-192.png">
    <?= css ([
        'assets/css/base.css',
        'assets/css/style.css',
        '@auto',
    ]) ?>
</head>
<body>
    <span id="cursor" class="cursor"></span>



