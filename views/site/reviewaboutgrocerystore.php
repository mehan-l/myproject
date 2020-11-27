<?php

    /*add here review about grocery store*/

use yii\widgets\ListView;

$this->title = 'Продуктовые магазины';
$this->params['breadcrumbs'][] = $this->title;

echo ListView::widget([
    'dataProvider' => $grocerystoreProvider,
    'itemView' => 'itemoflist',
]);
