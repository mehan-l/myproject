<?php


/*add reveiw about different*/

use yii\widgets\ListView;

echo ListView::widget([
	'dataProvider' => $difProvider,
	'itemView' => 'itemoflist',
]);