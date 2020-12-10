<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Grocerystore */

$this->title = 'Create Grocerystore';
$this->params['breadcrumbs'][] = ['label' => 'Grocerystores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grocerystore-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
