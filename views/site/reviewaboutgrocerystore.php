<?php


	/*add here review about grocery store*/

use yii\widgets\ListView;

echo ListView::widget([
	'dataProvider' => $grocerystoreProvider,
	'itemView' => 'itemoflist',
]);