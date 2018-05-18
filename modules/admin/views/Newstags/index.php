<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\NewstagsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Newstags';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newstags-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Newstags', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category.name',
            'news.title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);?>
</div>
