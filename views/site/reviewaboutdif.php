<?php

/*add reveiw about different*/

use yii\widgets\ListView;

$this->title = 'Разное';
$this->params['breadcrumbs'][] = $this->title;

echo ListView::widget([
    'dataProvider' => $difProvider,
    'itemView' => 'itemoflist'
]);
