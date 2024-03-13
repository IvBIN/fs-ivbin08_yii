<?php
/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin()?>

<?= $form->field($model, 'name')->textInput()?>
<?= $form->field($model, 'email')->textInput()?>
<?= $form->field($model, 'age')->textInput()?>
<?= $form->field($model, 'password')->textInput()?>
<?= $form->field($model, 'passwordRepeat')->passwordInput() ?>

<?= Html::submitButton("Регистрация")?>


<?php ActiveForm::end()?>




