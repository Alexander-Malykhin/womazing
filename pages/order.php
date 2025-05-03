<!doctype html>
<html lang="ru">
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/components/head.php" ?>
<body>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php" ?>
<main class="page">
    <div class="container">
        <section class="page__header">
            <h1 class="page__title">
                Оформление заказа
            </h1>

            <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/crumbs.php'?>
        </section>

        <section class="order">
            <form class="order__form">
                <div class="order__form-content">
                    <h2 class="order__form-title">
                        Данные покупателя
                    </h2>

                    <div class="order__form-inputs">
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
                    </div>
                </div>

                <div class="order__form-content">
                    <h2 class="order__form-title">
                        Адрес получателя
                    </h2>

                    <div class="order__form-inputs">
                        <input
                                type="text"
                                class="order__input"
                                placeholder="Страна"
                        >
                        <input
                                type="text"
                                class="order__input"
                                placeholder="Город"
                        >
                        <input
                                type="text"
                                class="order__input"
                                placeholder="Улица"
                        >
                        <input
                                type="text"
                                class="order__input"
                                placeholder="Дом"
                        >
                        <input
                                type="text"
                                class="order__input"
                                placeholder="Квартира"
                        >
                    </div>
                </div>

                <div class="order__form-content">
                    <h2 class="order__form-title">
                        Комментарии
                    </h2>

                    <textarea
                            placeholder="Страна"
                            rows="5" cols="33"
                            class="order__form-textarea"
                    ></textarea>
                </div>
            </form>

            <div class="order__basket">
                <div class="order__information">
                    <h2 class="order__form-title">Ваш заказ</h2>

                    <div class="information__order">
                        <div class="information__order-row">
                            <h2 class="information__order-title">
                                Товар
                            </h2>

                            <h2 class="information__order-title">
                                Всего
                            </h2>
                        </div>

                        <article class="information__order-row">
                            <h2 class="information__order-title">
                                Футболка USA
                            </h2>

                            <h2 class="information__order-title">
                                $129
                            </h2>
                        </article>
                        <article class="information__order-row">
                            <h2 class="information__order-title">
                                Футболка USA
                            </h2>

                            <h2 class="information__order-title">
                                $129
                            </h2>
                        </article>
                        <article class="information__order-row">
                            <h2 class="information__order-title">
                                Футболка USA
                            </h2>

                            <h2 class="information__order-title">
                                $129
                            </h2>
                        </article>

                        <div class="information__order-footer">
                            <span class="information__order-span">Итого</span>
                            <span class="information__order-span">$129</span>
                        </div>
                    </div>
                </div>

                <div class="order__information">
                    <h2 class="order__form-title">Способы оплаты</h2>

                    <div class="order__method">
                        <label class="order__method-label">
                            <input type="checkbox" class="order__method-check">
                            <span class="order__method-custom"></span>
                            <span class="order__method-text">Оплата наличными</span>
                        </label>
                    </div>

                    <button class="order__submit">
                        Разместить заказ
                    </button>
                </div>
            </div>
        </section>
    </div>
</main>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php" ?>
</body>
</html>