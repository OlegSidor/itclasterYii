<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Новини</h1>
<?php foreach ($rows as $row): ?>
  <div class="item">
  <a href="index.php?r=news/one&id=<?= Html::encode($row->id) ?>"><?= Html::encode($row->title) ?></a>
        <p style="float:right;">Created by: <?= Html::encode($row->user->username) ?></p>
        <p>Category: <?= Html::encode($row->category->name) ?></p>
        <hr>
  </div>
<?php endforeach; ?>
<?= LinkPager::widget([
    'pagination' => $pagination
]) ?>
