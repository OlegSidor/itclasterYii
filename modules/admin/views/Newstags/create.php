<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Newstags */

$this->title = 'Create Newstags';
$this->params['breadcrumbs'][] = ['label' => 'Newstags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newstags-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
