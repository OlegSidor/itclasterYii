<?php

use yii\db\Migration;

/**
 * Class m180517_120259_add_category_id_to_news_table
 */
class m180517_120259_add_category_id_to_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->addColumn('news', 'category_id', $this->integer());
      $this->addForeignKey('fk-category_id', 'news', 'category_id', 'category', 'id','SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropIndex('fk-category_id', 'news');
  		$this->dropColumn('news', 'category_id');
    }
}
