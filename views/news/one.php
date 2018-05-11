<?php
use yii\helpers\Html;
use app\models\News;
?>
  <div class="item">
        <h1><?= Html::encode($item->title)?></h1>
        <hr>
        <?= Html::encode($item->content)?>
        <p>
          Created By:
        <?=Html::encode($item->user->username)?>
        </p>
  </div>
