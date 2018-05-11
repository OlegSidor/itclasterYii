<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Category`.
 */
class m180511_174511_create_Category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Category', [
            'id' => $this->primaryKey(),
			'name' => $this->string(255),
        ]);
		   $this->addColumn('news', 'category_id', $this->integer());
		   $this->createIndex('idx-category', 'Category', 'name');
		   $this->addForeignKey('fk-category', 'news', 'category_id', 'Category', 'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
		$this->dropForeignKey('fk-category', 'news');
        $this->dropIndex('idx-category', 'Category');
        $this->dropColumn('news', 'category');
		$this->dropTable('Category');
    }
}
