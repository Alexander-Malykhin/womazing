<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/getPathImage.php';
$firstBrandImage = getPathImage('brand', 'brand-1.png');
$lastBrandImage = getPathImage('brand', 'brand-2.png');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="/css/index.css">
    <title>womazing</title>
</head>
<body>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php" ?>
<main class="page">
    <div class="container">
        <section class="page__header">
            <h1 class="page__title">
                О бренде
            </h1>

            <div class="crumbs">
                <span class="crumbs__item">Главная</span>
                <span class="crumbs__row">—</span>
                <span class="crumbs__item">О бренде</span>
            </div>
        </section>

        <section class="brand">
            <div class="brand__image-container">
                <img src="<?= $firstBrandImage ?>" alt="brand" class="brand__image">
            </div>

            <div class="brand__information">
                <h2 class="brand__title">
                    Идея и женщина
                </h2>

                <div class="brand__information-container">
                    <p class="brand__text">
                        Womazing была основана в 2010-ом и стала одной из самых успешных компаний нашей страны. Как и
                        многие итальянские фирмы, Womazing остаётся семейной компанией, хотя ни один из членов семьи не
                        является модельером.
                    </p>

                    <p class="brand__text">
                        Мы действуем по успешной формуле, прибегая к услугам известных модельеров для создания своих
                        коллекций.
                        Этот метод был описан критиком моды Колином Макдауэллом как форма дизайнерского со-творчества,
                        характерная для ряда итальянских prêt-a-porter компаний.
                    </p>
                </div>
            </div>

            <div class="brand__information">
                <h2 class="brand__title">
                    Магия в деталях
                </h2>

                <div class="brand__information-container">
                    <p class="brand__text">
                        Первый магазин Womazing был открыт в маленьком городке на севере страны в 2010-ом году. Первая
                        коллекция
                        состояла из двух пальто и костюма, которые были копиями парижских моделей.
                    </p>

                    <p class="brand__text">
                        Несмотря на то, что по образованию основательница была адвокатом, ее семья всегда была тесно
                        связана с
                        шитьём (прабабушка основательницы шила одежду для женщин, а мать основала профессиональную школу
                        кроя и
                        шитья). Стремление производить одежду для масс несло в себе большие перспективы, особенно в то
                        время,
                        когда высокая мода по-прежнему доминировала, а рынка качественного prêt-a-porter попросту не
                        существовало.
                    </p>
                </div>
            </div>

            <div class="brand__image-container">
                <img src="<?= $lastBrandImage ?>" alt="brand" class="brand__image">
            </div>
        </section>
    </div>
</main>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php" ?>
</body>
</html>