<?php

/*add here review about shoestore*/

use yii\widgets\ListView;

echo ListView::widget([
	'dataProvider' => $shoestorekProvider,
	'itemView' => 'itemoflist',
]);