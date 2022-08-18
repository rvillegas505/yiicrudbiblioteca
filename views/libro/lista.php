<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;;

?>

<h1>Libros a la venta</h1>

<div class="row">

<?php foreach ($libros as $libro){ ?>

    <div class="card" style="width: 18rem;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <?= Html::img($libro->imagen); ?>
        <div class="card-body">
            <h5 class="card-title"><?= Html::encode("{$libro->titulo}")?></h5>
        </div>
    </div>


<?php } ?>

</div>

<?= LinkPager::widget(['pagination'=>$paginacion]);