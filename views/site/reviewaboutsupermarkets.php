<?php

/*add reviews about suoermarkets*/

use yii\widgets\ListView;

$this->title = 'Супермаркеты';
$this->params['breadcrumbs'][] = $this->title;

echo ListView::widget([
    'dataProvider' => $supermarkProvider,
    'itemView' => 'itemoflist',
]);
