<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
  <?php $form = ActiveForm::begin(['id' => 'test-form']); ?>
  <?= $form->field($model, 'input')->textInput(['autofocus' => true]); ?>
  <?= $form->field($model, 'input2'); ?>
  <?= Html::submitButton('Submit', ['name' => 'submit']); ?>

<?php ActiveForm::end(); ?>
<?php if (Yii::$app->session->hasFlash('MyFormSubmited')):?>
  <h2>input1 = <?=$model->get()?>, input2 = <?=$model->get(1)?><h2>
<?php endif;?>
