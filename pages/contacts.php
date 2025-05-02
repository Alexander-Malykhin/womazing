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
                Контакты
            </h1>

            <div class="crumbs">
                <span class="crumbs__item">Главная</span>
                <span class="crumbs__row">—</span>
                <span class="crumbs__item">Контакты</span>
            </div>
        </section>

        <section class="contacts">
            <div class="contacts__back"></div>

            <div class="contacts__information">
                <article class="contacts__information-item">
                    <h2 class="contacts__information-title">
                        Телефон
                    </h2>

                    <a href="tel:89624050495" class="contacts__text">
                        +7 (495) 823-54-12
                    </a>
                </article>

                <article class="contacts__information-item">
                    <h2 class="contacts__information-title">
                        E-mail
                    </h2>

                    <a href="mailto:info@sitename.com" class="contacts__text">
                        info@sitename.com
                    </a>
                </article>

                <article class="contacts__information-item">
                    <h2 class="contacts__information-title">
                        Адрес
                    </h2>

                    <span class="contacts__text">
                        г. Москва, 3-я улица Строителей, 25
                    </span>
                </article>
            </div>

            <div class="contacts__order">
                <h3 class="contacts__order-title">
                    Напишите нам
                </h3>

                <form action="" class="contacts__order-form">
                    <input
                            type="text"
                            class="contacts__order-input"
                            placeholder="Имя"
                    >
                    <input
                            type="email"
                            class="contacts__order-input"
                            placeholder="E-mail"
                    >
                    <input
                            type="text"
                            class="contacts__order-input"
                            placeholder="Телефон"
                    >

                    <textarea
                            class="contacts__order-textarea"
                            placeholder="Сообщение"
                            rows="5" cols="33"
                    ></textarea>

                    <button class="contacts__order-button">
                        Отправить
                    </button>
                </form>

                <div class="contacts__message">
                    Сообщение успешно отправлено
                </div>
            </div>
        </section>
    </div>
</main>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php" ?>
</body>
</html>