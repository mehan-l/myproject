<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Shoestore */

$this->title = 'Create Shoestore';
$this->params['breadcrumbs'][] = ['label' => 'Shoestores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shoestore-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
