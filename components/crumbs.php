<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/staticModels/Crumb.php';


$arrayPages = [
    new Crumb('Корзина', '/pages/basket.php'),
    new Crumb('Магазин', '/pages/shop.php'),
    new Crumb('О бренде', '/pages/brand.php'),
    new Crumb('Контакты', '/pages/contacts.php'),
    new Crumb('Оформление заказа', '/pages/order.php'),
     new Crumb('Заказ получен', '/pages/orderSuccess.php')
];

function render($array, $url): string
{
    $currentItem = null;
    foreach ($array as $item) {
        if ($item->getLink() === $url) {
            $currentItem = $item;
            break;
        }
    }

    if (!$currentItem) return "";

    return "<a href='{$currentItem->getLink()}' class='crumbs__item'>{$currentItem->getName()}</a>";
}

$activePage = render($arrayPages, $_SERVER['REQUEST_URI']);
?>


<div class="crumbs">
    <a href="/" class="crumbs__item">Главная</a>
    <span class="crumbs__row">—</span>
    <?php echo $activePage?>
</div>