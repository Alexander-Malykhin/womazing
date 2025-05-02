<?php
$logoImage = getPathImage('header', 'logo.png');
?>

<div class="mobile__menu">
    <div class="mobile__navigation">
        <button class="mobile__button">
            <span class="mobile__button-line"></span>
            <span class="mobile__button-line"></span>
        </button>

        <div class="mobile__logo">
            <img src="<?= $logoImage ?>" alt="logo">
        </div>

        <nav class="mobile__navigation-list">
            <a href="#" class="navigation__item item-active">
                <span class="navigation__span">Главная</span>
            </a>
            <a href="#" class="navigation__item">
                <span class="navigation__span">Магазин</span>
            </a>
            <a href="#" class="navigation__item">
                <span class="navigation__span">О бренде</span>
            </a>
            <a href="#" class="navigation__item">
                <span class="navigation__span">Контакты</span>
            </a>
        </nav>
    </div>
    <div class="mobile__background"></div>
</div>