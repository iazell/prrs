<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reports;

/**
 * ReportsSearch represents the model behind the search form about `app\models\Reports`.
 */
class ReportsSearch extends Reports
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'recordid'], 'integer'],
            [['detailOfEvent', 'actionTaken', 'summary', 'status'], 'safe'],
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
        $query = Reports::find();

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
            'recordid' => $this->recordid,
        ]);

        $query->andFilterWhere(['like', 'detailOfEvent', $this->detailOfEvent])
            ->andFilterWhere(['like', 'actionTaken', $this->actionTaken])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
