<!doctype html>
<html lang="ru">
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/components/head.php" ?>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php"?>
    <main class="page">
        <div class="container">
            <section class="page__header">
                <h1 class="page__title">
                    Магазин
                </h1>

                <div class="crumbs">
                    <span class="crumbs__item">Главная</span>
                    <span class="crumbs__row">—</span>
                    <span class="crumbs__item">Магазин</span>
                </div>
            </section>

            <section class="shop">
                <div class="shop__filter">
                    <button class="shop__filter-item filter-active">
                        Все
                    </button>
                    <button class="shop__filter-item">
                        Пальто
                    </button>
                    <button class="shop__filter-item">
                        Свитшоты
                    </button>
                    <button class="shop__filter-item">
                        Кардиганы
                    </button>
                    <button class="shop__filter-item">
                        Толстовки
                    </button>
                </div>

                <div class="shop__content">
                    <h2 class="shop__filter-result">Показано: 9 из 12 товаров</h2>

                    <div class="shop__list">
                        <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/card.php'?>
                        <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/card.php'?>
                        <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/card.php'?>
                        <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/card.php'?>
                        <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/card.php'?>
                        <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/card.php'?>
                        <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/card.php'?>
                        <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/card.php'?>
                        <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/card.php'?>
                    </div>

                    <h2 class="shop__filter-result">Показано: 9 из 12 товаров</h2>

                    <div class="shop__buttons">
                        <button class="shop__button shop__button-active">
                            1
                        </button>

                        <button class="shop__button">
                            2
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php"?>
</body>
</html>