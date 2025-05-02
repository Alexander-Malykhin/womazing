<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/getPathImage.php';
$logoImage = getPathImage('header', 'logo.png');
$facebookImage = getPathImage('footer', 'facebook.svg');
$instagramImage = getPathImage('footer', 'instagram.svg');
$twitterImage = getPathImage('footer', 'twitter.svg');
$visaAndMasterCardImage = getPathImage('footer', 'visa-mastercard.svg');
?>

<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <div class="footer__logo">
                <img src="<?= $logoImage ?>" alt="logo">
            </div>

            <span class="footer__row"></span>

            <nav class="footer__navigation">
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

            <span class="footer__row"></span>

            <div class="footer__contacts">
                <a href="tel:89624050495" class="footer__contacts-item">
                    +7 (495) 823-54-12
                </a>

                <a href="mailto:hello@womazing.com" class="footer__contacts-item">
                    hello@womazing.com
                </a>
            </div>

            <div class="footer__information">
                <ul class="footer__information__list">
                    <li class="footer__information-item">
                        © Все права защищены
                    </li>
                    <li class="footer__information-item">
                        Политика конфиденциальности
                    </li>
                    <li class="footer__information-item">
                        Публичная оферта
                    </li>
                </ul>
            </div>

            <ul class="footer__products">
                <li class="footer__products-item">
                    Пальто
                </li>
                <li class="footer__products-item">
                    Свитшоты
                </li>
                <li class="footer__products-item">
                    Кардиганы
                </li>
                <li class="footer__products-item">
                    Толстовки
                </li>
            </ul>

            <div class="footer__links">
                <div class="footer__links-row">
                    <a href="#" class="footer__links-item">
                        <img src="<?= $instagramImage ?>" alt="instagram">
                    </a>
                    <a href="#" class="footer__links-item">
                        <img src="<?= $facebookImage ?>" alt="facebook">
                    </a>
                    <a href="#" class="footer__links-item">
                        <img src="<?= $twitterImage ?>" alt="twitter">
                    </a>
                </div>

                <a href="#" class="footer__links-item">
                    <img src="<?= $visaAndMasterCardImage ?>" alt="visa-master-card">
                </a>
            </div>
        </div>
    </div>
</footer>