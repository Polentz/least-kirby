<!DOCTYPE html>
<html lang="fr">
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
        content="least [laboratoire écologie et art pour une société en transition] réunit des scientifiques, des artistes, des penseurs et penseuses, des ingénieur·e·s, des économistes pour partager des savoirs et des savoir-faire, créer et encourager la co-création avec des groupes locaux pour expérimenter, agir ensemble, partager et apprendre, afin de régénérer la société et son fonctionnement en mobilisant les ressources de chacun·e. Il encourage des modes alternatifs de fonctionnement basés sur des activités communes allant à l'encontre de la concurrence individuelle.">
    <link rel="canonical" href="<?= $page->url() ?>">
    <meta name="keywords"
        content="écologie, art, co-création, genève, projets co-créatifs, projets inclusifs, formation continue, école de la transition, résidences de recherche">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="least">
    <meta property="og:description"
        content="least [laboratoire écologie et art pour une société en transition] réunit des scientifiques, des artistes, des penseurs et penseuses, des ingénieur·e·s, des économistes pour partager des savoirs et des savoir-faire, créer et encourager la co-création avec des groupes locaux pour expérimenter, agir ensemble, partager et apprendre, afin de régénérer la société et son fonctionnement en mobilisant les ressources de chacun·e. Il encourage des modes alternatifs de fonctionnement basés sur des activités communes allant à l'encontre de la concurrence individuelle.">
    <meta property="og:url" content="<?= $page->url() ?>">
    <meta property="og:site_name" content="least">
    <meta property="og:image" content="assets/media/images/this-is-the-muffa.jpg">
    <meta property="og:image:alt" content="Identité visuelle de least avec un collage d'images de moisissures">
    <meta property="og:image:secure_url" content="assets/media/images/this-is-the-muffa.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description"
        content="least [laboratoire écologie et art pour une société en transition] réunit des scientifiques, des artistes, des penseurs et penseuses, des ingénieur·e·s, des économistes pour partager des savoirs et des savoir-faire, créer et encourager la co-création avec des groupes locaux pour expérimenter, agir ensemble, partager et apprendre, afin de régénérer la société et son fonctionnement en mobilisant les ressources de chacun·e. Il encourage des modes alternatifs de fonctionnement basés sur des activités communes allant à l'encontre de la concurrence individuelle.">
    <meta name="twitter:title"
        content="least [laboratoire écologie et art pour une société en transition] réunit des scientifiques, des artistes, des penseurs et penseuses, des ingénieur·e·s, des économistes pour partager des savoirs et des savoir-faire, créer et encourager la co-création avec des groupes locaux pour expérimenter, agir ensemble, partager et apprendre, afin de régénérer la société et son fonctionnement en mobilisant les ressources de chacun·e. Il encourage des modes alternatifs de fonctionnement basés sur des activités communes allant à l'encontre de la concurrence individuelle.">
    <meta name="twitter:image" content="assets/media/images/this-is-the-muffa.jpg">
    <meta name="twitter:image:alt" content="Identité visuelle de least avec un collage d'images de moisissures">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="shortcut icon" type="image/png" sizes="48x48" href="assets/favicon/least-favicon-48.png">
    <link rel="apple-touch-icon" sizes="192x192" href="assets/favicon/least-favicon-192.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <?= css ([
        'assets/css/base.css',
        'assets/css/style.css',
        '@auto',
    ]) ?>
</head>
<body>
    <span id="cursor" class="cursor"></span>



