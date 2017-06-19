<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblCandidates;

/**
 * TblCandidatesSearch represents the model behind the search form about `backend\models\TblCandidates`.
 */
class TblCandidatesSearch extends TblCandidates
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['candidates_id', 'training_id'], 'integer'],
            [['prefix_name', 'fname', 'lname', 'telephone', 'email', 'food_type', 'candidates_type'], 'safe'],
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
        $query = TblCandidates::find();

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
            'candidates_id' => $this->candidates_id,
            'training_id' => $this->training_id,
        ]);

        $query->andFilterWhere(['like', 'prefix_name', $this->prefix_name])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'food_type', $this->food_type])
            ->andFilterWhere(['like', 'candidates_type', $this->candidates_type]);

        return $dataProvider;
    }
}
