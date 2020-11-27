<?php

use app\widgets\Alert;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Добавить отзыв';
$this->params['breadcrumbs'][] = $this->title;

if (Yii::$app->user->isGuest) {
    echo '<h2>Чтобы добавить свой отзыв нужно ' . Html::a('зарегистрироваться', ['site/registration']) . ' на сайте или ' . Html::a('войти', ['site/login']) . '</h2>';
} else {
    $form = ActiveForm::begin();
    ?>

    <?= $form->field($formreviewmodel, 'name')->textInput() ?>
    <?= $form->field($formreviewmodel, 'review')->textarea(['rows' => 10, 'cols' => 6])?>
    <?= $form->field($formreviewmodel, 'category')->dropDownList([
    '0' => 'Продуктовые магазины',
    '1' => 'Обувные магазины',
    '2' => 'Супермаркеты',
    '3' => 'Разное',
    ]); ?>
    <?= $form->field($formreviewmodel, 'verifyCode')->widget(Captcha::className(), [
    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
    ]) ?>
    <?= Html::submitButton('Оставить отзыв'); ?>

    <?php ActiveForm::end();
}

Alert::widget();
