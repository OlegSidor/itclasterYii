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

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
		$this->dropTable('Category');
    }
}
