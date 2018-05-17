<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news_tags`.
 */
class m180515_191534_create_news_tags_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news_tags', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(11),
            'news_id' => $this->integer(11),
        ]);
         $this->addForeignKey('fk-tags-category_id', 'news_tags', 'category_id', 'Category', 'id');
         $this->addForeignKey('fk-tags-news_id', 'news_tags', 'news_id', 'news', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropForeignKey('fk-tags-category_id', 'tags');
      $this->dropForeignKey('fk-tags-news_id', 'tags');
        $this->dropTable('news_tags');
    }
}
