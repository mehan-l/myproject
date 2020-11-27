<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Different */

$this->title = 'Create Different';
$this->params['breadcrumbs'][] = ['label' => 'Differents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="different-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
