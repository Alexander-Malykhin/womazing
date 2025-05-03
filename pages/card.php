<!doctype html>
<html lang="ru">
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/components/head.php" ?>
<body>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php" ?>
<main class="page">
    <div class="container">
        <section class="page__header">
            <h1 class="page__title">
                Свитшот Sweet Shot
            </h1>

            <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/crumbs.php' ?>
        </section>

        <section class="product">
            <div class="product__information">
                <div class="product__image-container">
                    <img src="/images/card.png" alt="image" class="product__image">
                </div>

                <div class="product__description">
                    <div class="product__description-header">
                        <span class="product__description-price">
                            $311
                        </span>

                        <h2 class="product__description-discount">
                            $540
                        </h2>
                    </div>

                    <div class="product__description-column">
                        <p class="product__description-text">
                            Выберите размер
                        </p>

                        <div class="product__description-list">
                            <button class="product__button-size">
                                S
                            </button>
                            <button class="product__button-size">
                                M
                            </button>
                            <button class="product__button-size">
                                L
                            </button>
                        </div>
                    </div>

                    <div class="product__description-column">
                        <p class="product__description-text">
                            Выберите размер
                        </p>

                        <div class="product__description-list">
                            <button class="product__button-color"></button>
                            <button class="product__button-color"></button>
                            <button class="product__button-color"></button>
                        </div>
                    </div>

                    <div class="product__description-footer">
                        <input
                                type="text"
                                class="product__description-input"
                                placeholder="1"
                                value="1"
                        >
                        <button class="product__description-button">
                            Добавить в корзину
                        </button>
                    </div>
                </div>
            </div>

            <div class="product__relate">
                <h2 class="product__relate-title">
                    Связанные товары
                </h2>

                <div class="product__relate-list">
                    <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/card.php'?>
                    <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/card.php'?>
                    <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/card.php'?>
                </div>
            </div>
        </section>
    </div>
</main>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php" ?>
</body>
</html>