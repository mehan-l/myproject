<?php

/*add reviews about suoermarkets*/

use yii\widgets\ListView;

echo ListView::widget([
	'dataProvider' => $supermarkProvider,
	'itemView' => 'itemoflist',
]);