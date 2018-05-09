<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Новини</h1>
<?php foreach ($rows as $row): ?>
  <div class="item">
        <?= Html::encode($row->title) ?>
        <hr>
  </div>
<?php endforeach; ?>
<?= LinkPager::widget([
    'pagination' => $pagination
]) ?>
