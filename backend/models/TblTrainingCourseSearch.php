<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblTrainingCourse;

/**
 * TblTrainingCourseSearch represents the model behind the search form about `backend\models\TblTrainingCourse`.
 */
class TblTrainingCourseSearch extends TblTrainingCourse
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['training_id', 'major_id', 'tp_id', 'candidates_limits'], 'integer'],
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
        $query = TblTrainingCourse::find();

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
            'training_id' => $this->training_id,
            'major_id' => $this->major_id,
            'tp_id' => $this->tp_id,
            'candidates_limits' => $this->candidates_limits,
        ]);

        return $dataProvider;
    }
}
