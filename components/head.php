<?php
$title = 'womazing';
$path = $_SERVER['HTTPS'] ? 'https://' : "http://";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="/css/index.css">
    <script src="<?= $path . $_SERVER["SERVER_NAME"] . '/js/orderHeaderForm.js' ?>" defer></script>
    <title><?= $title ?></title>
</head>
