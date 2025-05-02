<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/models/navigation.php';

$arrayNavigation = [
    new NavigationItem('Главная', '/', true),
    new NavigationItem('Магазин', '/pages/shop.php'),
    new NavigationItem('О бренде', '/pages/brand.php'),
    new NavigationItem('Контакты', '/pages/contacts.php'),
];
?>



<nav class="footer__navigation">
    <?php foreach ($arrayNavigation as $item) : ?>
        <a href="<?= $item->getLink() ?>" class="navigation__item <?= $item->isActive($_SERVER['REQUEST_URI']) ? "item-active" : "" ?>">
            <span class="navigation__span"><?= $item->getTitle(); ?></span>
        </a>
    <?php endforeach; ?>
</nav>
