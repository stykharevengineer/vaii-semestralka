<?php
// Administrácia – zatiaľ len uvítacia stránka (upravené pomocou AI)

/** @var \Framework\Support\LinkGenerator $link */
/** @var \Framework\Auth\AppUser $user */
?>

<section class="placeholder">
    <h1>Administrácia</h1>
    <p>Vitajte, <strong><?= e($user->getName()) ?></strong>!</p>
    <p>Táto časť aplikácie je dostupná iba po prihlásení. Neskôr tu bude správa platní, interpretov a žánrov.</p>
</section>
