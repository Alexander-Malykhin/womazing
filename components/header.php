<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/getPathImage.php';

$logoImage = getPathImage('header', 'logo.png');
$phoneImage = getPathImage('header', 'phone.png');
$basketImage = getPathImage('header', 'bag.svg');

$getBackground = !($_SERVER['REQUEST_URI'] !== '/');
?>

<header class="header">
    <div class="container">
        <div class="header__content">
            <div class="burger">
                <div class="burger__line"></div>
                <div class="burger__line"></div>
                <div class="burger__line"></div>
            </div>

            <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/components/mobile__menu.php' ?>

            <div class="logo">
                <img src="<?php echo $logoImage ?>" alt="logo">
            </div>

            <span class="header__row"></span>

            <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/components/navigation.php' ?>

            <span class="header__row"></span>

            <div class="header__buttons">
                <div class="phone">
                    <button class="phone__button">
                        <img src="<?php echo $phoneImage ?>" alt="phone" class="phone__image">
                    </button>

                    <a href="tel:+79624050495">
                        <span class="phone__text">+7 (495) 823-54-12</span>
                    </a>

                </div>

                <button class="basket">
                    <img src="<?php echo $basketImage ?>" alt="bag">
                </button>
            </div>
        </div>
    </div>
    <div class=<?=$getBackground? "header__background" : "" ?>></div>
</header>