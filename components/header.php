<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/getPathImage.php';

$logoImage = getPathImage('header', 'logo.png');
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
                <a href="/">
                    <img src="<?php echo $logoImage ?>" alt="logo">
                </a>
            </div>

            <span class="header__row"></span>

            <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/components/navigation.php' ?>

            <span class="header__row"></span>

            <div class="header__buttons">
                <div class="phone">
                    <button class="phone__button"></button>

                    <a href="tel:+79624050495">
                        <span class="phone__text">+7 (495) 823-54-12</span>
                    </a>
                </div>

                <a class="basket" href="/pages/basket.php">
                    <img src="<?php echo $basketImage ?>" alt="bag">
                </a>
            </div>
        </div>
    </div>
    <div class=<?=$getBackground? "header__background" : "" ?>></div>

    <div class="header__order">
       <div class="header__order-container">
           <button class="header__order-close">
               <span class="header__order-line"></span>
               <span class="header__order-line"></span>
           </button>

           <h2 class="header__order-title">Заказать обратный звонок</h2>

           <form action="" class="header__order-form">
               <input
                       type="text"
                       class="order__input"
                       placeholder="Имя"
               >
               <input
                       type="email"
                       class="order__input"
                       placeholder="E-mail"
               >
               <input
                       type="text"
                       class="order__input"
                       placeholder="Телефон"
               >
               <button class="header__order-button">
                   Заказать звонок
               </button>
           </form>
       </div>
    </div>
</header>