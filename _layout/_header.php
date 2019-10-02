<?php

$selected = $selected ?? null;
$lang = $lang ?? 'nl';
$header_minimal = $header_minimal ?? true;

?>
<div class="header<?= $header_minimal ? ' header-minimal' : '' ?>">
    <div class="main-wrap">
        <div class="menu-trigger"></div>
        <a class="logo" href="index.php"></a>
        <nav class="main-menu">
            <a href="about.php"<?= $selected == 1 ? ' class="active"' : '' ?>>Over Ons</a>
            <a href="development.php"<?= $selected == 2 ? ' class="active"' : '' ?>>Nearshore Development</a>
            <a href="payrolling.php"<?= $selected == 3 ? ' class="active"' : '' ?>>Payrolling</a>
            <a href="detachering.php"<?= $selected == 4 ? ' class="active"' : '' ?>>Detachering</a>
            <a href="contact.php" class="contact<?= $selected == 5 ? ' active' : '' ?>">Contact</a>
        </nav>
        <a href="#" class="lang lang-<?= $lang ?>"></a>
        <?php if (!$header_minimal): ?>
            <div class="top-text">
                <div class="sub-menu">
                    <a href="#">Schrijf je in</a>
                    <a href="#">Voor onze e-nieuwsbrief</a>
                </div>
            </div>
            <div class="middle-text">
                <h1>
                    projectcoördinatie, consultancy<br>
                    en begeleiding van nearshore activiteiten
                </h1>
            </div>
            <div class="bottom-text">
                <p>Lees meer over onze ervaring in volgende richtingen:</p>
                <div class="sub-menu">
                    <a href="#">Nearshore&nbsp;Development</a>
                    <a href="#">Payrolling</a>
                    <a href="#">Detachering</a>
                </div>
            </div>
        <?php endif ?>
    </div>
</div>