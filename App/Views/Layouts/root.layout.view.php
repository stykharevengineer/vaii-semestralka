<?php
// Spoločné rozloženie aplikácie 33 RPM – prevzaté z html/index.html (vygenerované pomocou AI)

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */

// URL aktuálnej stránky – podľa nej sa v menu zvýrazní aktívna položka
$currentUrl = $link->url([]);
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App\Configuration::APP_NAME ?> – katalóg vinylových platní</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $link->asset('favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $link->asset('favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $link->asset('favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= $link->asset('favicons/site.webmanifest') ?>">
    <link rel="shortcut icon" href="<?= $link->asset('favicons/favicon.ico') ?>">
    <link rel="stylesheet" href="<?= $link->asset('css/styl.css') ?>">
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <a href="<?= $link->url('home.index') ?>" class="logo">
            <span class="logo-disc"></span>
            <span class="logo-text"><?= App\Configuration::APP_NAME ?></span>
        </a>

        <!-- Checkbox slúži na otváranie mobilného menu bez JavaScriptu -->
        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="menu-icon" aria-label="Otvoriť menu">
            <span></span><span></span><span></span>
        </label>

        <nav class="main-nav">
            <ul>
                <li>
                    <a href="<?= $link->url('home.index') ?>"
                       class="<?= $currentUrl === $link->url('home.index') ? 'active' : '' ?>">Domov</a>
                </li>
                <li>
                    <a href="<?= $link->url('record.detail') ?>"
                       class="<?= $currentUrl === $link->url('record.detail') ? 'active' : '' ?>">Katalóg</a>
                </li>
                <li><a href="#">Interpreti</a></li>
                <?php if ($user->isLoggedIn()) { ?>
                    <li>
                        <a href="<?= $link->url('admin.index') ?>"
                           class="<?= $currentUrl === $link->url('admin.index') ? 'active' : '' ?>">Administrácia</a>
                    </li>
                <?php } ?>
            </ul>

            <div class="user-box">
                <?php if ($user->isLoggedIn()) { ?>
                    <span class="username">👤 <?= e($user->getName()) ?></span>
                    <a href="<?= $link->url('auth.logout') ?>" class="btn btn-outline">Odhlásiť sa</a>
                <?php } else { ?>
                    <a href="<?= App\Configuration::LOGIN_URL ?>" class="btn btn-outline">Prihlásiť sa</a>
                    <a href="#" class="btn btn-primary">Registrácia</a>
                <?php } ?>
            </div>
        </nav>
    </div>
</header>

<main class="container">
    <?= $contentHTML ?>
</main>

<footer class="site-footer">
    <div class="container footer-inner">
        <p>&copy; <?= date('Y') ?> <?= App\Configuration::APP_NAME ?> – katalóg vinylových platní</p>
        <p><a href="#">O projekte</a> · <a href="#">Kontakt</a></p>
    </div>
</footer>

</body>
</html>
