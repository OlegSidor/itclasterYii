<?php

namespace app\models;

use Yii;
use dektrium\user\models\User;
use app\models\Category;
use app\models\Newstags;
use yii\helpers\ArrayHelper;
/**
*
* @property int $id
* @property string $title
* @property string $content
* @property int $user_id
* @property int $category_id
*
* @property Newstags[] $newstags
* @property User $user
*/
class News extends \yii\db\ActiveRecord
{
    public $tag_array;
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
            [['tag_array','category_name'],'safe'],
            [['user_id'], 'integer'],
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
            'user_id' => 'Author',
            'tag_array' => 'Categorys',
            'category_id' => 'Category'
    ];
}

  /**
   * @return \yii\db\ActiveQuery
   */
  public function getUser()
  {
      return $this->hasOne(User::className(), ['id' => 'user_id']);
  }
  /**
  * @return \yii\db\ActiveQuery
  */
 public function getTags()
 {
        return $this->hasMany(Newstags::className(), ['news_id' => 'id']);
 }
   public function afterSave($insert,$changetAttributes){
     parent::afterSave($insert,$changetAttributes);
     if(!empty($this->tag_array)){
     foreach($this->tag_array as $one){
       $model = new Newstags();
       $model->category_id = $one;
       $model->news_id = $this->id;
       $model->save();
     }
   }
  }
  public function afterFind()
  {
    $this->tag_array = ArrayHelper::map($this->tags,'id','category_id');
  }
}
