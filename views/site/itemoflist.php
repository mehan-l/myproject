<?php

use yii\helpers\Html; ?>

<div class="news-item">
	<h2><?= 'Оставил ' .Html::encode($model->name) ?></h2>

	<?= '<h3>Отзыв</h3><br>'.Html::encode($model->review) ?>
</div>
