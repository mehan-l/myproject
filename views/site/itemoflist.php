<?php

use yii\helpers\Html;

?>

<div class="news-item">
    <h2><?='Оставил(a) ' . Html::encode($model->username) ?></h2>
    <?= '<h3>Отзыв</h3><br>' . Html::encode($model->review) ?>
</div>
