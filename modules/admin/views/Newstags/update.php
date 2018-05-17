<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Newstags */

$this->title = 'Update Newstags: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Newstags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="newstags-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
