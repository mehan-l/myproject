<?php



use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?= Html::encode($this->title) ?>

<h4>Регистрация</h4>

<?php $formreg = ActiveForm::begin() ?>
	<?= $formreg->field($regmodel, 'name') ?>
	<?= $formreg->field($regmodel, 'password') ?>
	<?= Html::submitButton('Зарегистрироваться') ?>
<?php ActiveForm::end() ?>
