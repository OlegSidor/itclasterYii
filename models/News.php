<?php

namespace app\models;

use Yii;
use dektrium\user\models\User;
/**
* @property int $id
* @property string $title
* @property string $content
* @property int $user_id
*
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
            [['user_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
      ];
  }

  /**
   * @return \yii\db\ActiveQuery
   */
  public function getUser()
  {
      return $this->hasOne(User::className(), ['id' => 'user_id']);
  }
  public function getCreator()
  {
    return User::findOne(1)->username;
  }
}
