<?php


/*Form for adding new review*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
?>



<?= $form->field($formreviewmodel, 'name')->textInput() ?>
<?= $form->field($formreviewmodel, 'review')->textInput() ?>
<?= $form->field($formreviewmodel, 'category')->dropDownList([
	'0'=>'Продуктовые магазины',
	'1'=>'Обувные магазины',
	'2'=>'Супермаркеты',
	'3'=>'Разное',
]); ?>
<?= Html::submitButton('Оставить отзыв'); ?>




<?php ActiveForm::end(); ?>