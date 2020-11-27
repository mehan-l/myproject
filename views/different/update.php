<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Different */

$this->title = 'Update Different: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Differents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="different-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
