<!doctype html>
<html lang="ru">
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/components/head.php" ?>
<body>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php" ?>
<main class="page">
    <div class="container">
        <section class="page__header">
            <h1 class="page__title">
                Корзина
            </h1>

            <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/crumbs.php'?>
        </section>

        <section class="basket__page">
            <div class="basket__table">
                <div class="basket__header">
                    <div class="basket__container">
                        <div class="basket__column">
                            <span class="basket__header-title">Товар</span>
                        </div>
                        <div class="basket__column"></div>
                        <div class="basket__column">
                            <span class="basket__header-title">Цена</span>
                        </div>
                        <div class="basket__column">
                            <span class="basket__header-title">Количество</span>
                        </div>
                        <div class="basket__column">
                            <span class="basket__header-title">Всего</span>
                        </div>
                    </div>
                </div>


                <div class="basket__list">
                    <article class="basket__item">
                        <div class="basket__container">
                            <div class="basket__column">
                                <button class="basket__item-delete">
                                    <span class="basket__item-line"></span>
                                    <span class="basket__item-line"></span>
                                </button>
                            </div>

                            <div class="basket__column basket__item-information">
                                <div class="basket__image-container">
                                    <img src="/images/card.png" alt="image" class="basket__item-image">
                                </div>

                                <h2 class="basket__item-text">
                                    Футболка USA
                                </h2>
                            </div>

                            <div class="basket__column">
                                <span class="basket__item-text">$129</span>
                            </div>

                            <div class="basket__column">
                                <div class="basket__item-count">
                                    1
                                </div>
                            </div>

                            <div class="basket__column">
                                <span class="basket__item-text">$129</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="basket__footer">
               <div class="basket__footer-container">
                   <p class="basket__result-subtotal">Подытог: $129</p>

                   <div class="basket__footer-result">
                       <div class="basket__result">
                           <span class="basket__result-span">Итого:</span>
                           <span class="basket__result-span">$129</span>
                       </div>

                       <a href="/pages/order.php" class="basket__submit">
                           Оформить заказ
                       </a>
                   </div>
               </div>
            </div>
        </section>
    </div>
</main>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php" ?>
</body>
</html>