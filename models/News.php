<?php

namespace app\models;

use Yii;
use dektrium\user\models\User;
use app\models\Category;
/**
*
* @property int $id
* @property string $title
* @property string $content
* @property int $user_id
* @property int $category_id
*
* @property Category $category
* @property User $user
*/
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['user_id', 'category_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'user_id' => 'User ID',
            'category_id' => 'Category ID',
    ];
}

  /**
   * @return \yii\db\ActiveQuery
   */
  public function getUser()
  {
      return $this->hasOne(User::className(), ['id' => 'user_id']);
  }
  public function getCategory()
  {
  return $this->hasOne(Category::className(), ['id' => 'category_id']);
  }
}
