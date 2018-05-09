<?php
use yii\helpers\Html;
use app\models\News;
?>

<h1>Новини</h1>
  <div class="item">
        <h1><?= Html::encode($item->title)?></h1>
        <hr>
        <?= Html::encode($item->content)?>
        <p>
          Created By:
        <?=Html::encode(News::getCreator())?>
        </p>
  </div>
