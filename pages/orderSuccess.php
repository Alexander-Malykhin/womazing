<!doctype html>
<html lang="ru">
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/components/head.php" ?>
<body>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php"?>
<main class="page">
    <div class="container">
        <section class="page__header">
            <h1 class="page__title">
                Заказ получен
            </h1>

            <?php require $_SERVER['DOCUMENT_ROOT'] . '/components/crumbs.php'?>
        </section>

        <section class="success">
            <div class="success__image-container">
                <img src="/images/success.png" alt="" class="success__image">
            </div>

            <div class="success__information">
                <h2 class="success__information-title">
                    Заказ успешно оформлен
                </h2>

                <p class="success__information-text">
                    Мы свяжемся с вами в ближайшее время!
                </p>
            </div>

            <button class="success__button">
                Перейти на главную
            </button>
        </section>
    </div>
</main>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php"?>
</body>
</html>