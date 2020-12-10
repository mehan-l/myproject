<?php

/*add here review about shoestore*/

use yii\widgets\ListView;

$this->title = 'Обувные магазины';
$this->params['breadcrumbs'][] = $this->title;

echo ListView::widget([
    'dataProvider' => $shoestorekProvider,
    'itemView' => 'itemoflist',
]);
