<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'tag_array')->widget(
    Select2::className(),[
    'name' => 'Category',
    'data' =>  $categories,
    'options' => ['multiple' => true, 'placeholder' => 'Categorys ...'],
    'pluginOptions' => [
      'allowClear' => true,
      'tags' => true,
      'maximumInputLength' => 10,
    ],
  ]);?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end();
    ?>

</div>
