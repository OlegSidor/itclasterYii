<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\News;
use app\models\Category;
use dektrium\user\models\User;

/**
 * NewsSearch represents the model behind the search form of `app\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
          ['id', 'integer'],
          [['title', 'content','category_id','user_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = News::find()->with(['user','tags']);
        $query->joinWith(['tags']);
        $query->joinWith(['user']);
        $query->joinWith(['tags.category']);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);
        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'user.username', $this->user_id])
           ->andFilterWhere(['like', 'category.name', $this->category_id]);
            // if(!empty($this->category_id)){
            //   $ctgarray = explode(',',$this->category_id);
            //   foreach ($ctgarray as $one) {
            //     $query->orFilterWhere(['like', 'category.name', $one]);
            //   }
            // }
        return $dataProvider;
    }
}
