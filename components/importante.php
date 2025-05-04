<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/getPathImage.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/staticModels/ImportantItem.php';

$imageImportante = getPathImage('importante', 'calidad.svg');
$imageGear = getPathImage('importante', 'gear.svg');
$iamgeResponsabilidad = getPathImage('importante', 'responsabilidad.svg');

$arrayItem = [
    new ImportantItem (
        $imageImportante,
        "Качество",
        "Наши профессионалы работают на лучшем оборудовании для пошива одежды беспрецедентного качества"
    ),
    new ImportantItem(
        $imageGear,
        "Скорость",
        "Благодаря отлаженной системе в Womazing мы можем отшивать до 20-ти единиц продукции в наших собственных цехах"
    ),
    new ImportantItem(
        $iamgeResponsabilidad,
        "Ответственность",
        "Мы заботимся о людях и планете. Безотходное производство и комфортные условия труда - все это Womazing"
    ),
];
?>

<section>
    <div class="container">
        <div class="main__content">
            <h1 class="main__title">
                Что для нас важно
            </h1>

            <div class="importante">
                <?php foreach ($arrayItem as $item): ?>
                    <article class="importante__item">
                        <img src="<?= htmlspecialchars($item->getImage()) ?>" alt="calidad" class="importante__item-image">

                        <h2 class="importante__item-title">
                            <?= htmlspecialchars($item->getTitle()) ?>
                        </h2>

                        <p class="importante__item-text">
                            <?= htmlspecialchars($item->getDescription()) ?>
                        </p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>