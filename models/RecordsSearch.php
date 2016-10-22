<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Records;

/**
 * RecordsSearch represents the model behind the search form about `app\models\Records`.
 */
class RecordsSearch extends Records
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['complainantName', 'complainantAddress', 'complainantContact', 'email', 'complainantGender', 'accusedName', 'accusedAddress', 'accusedContact', 'accusedGender', 'eventNmber', 'picture', 'subject', 'natureOfCrime', 'dateCommited', 'placeCommited', 'apprehendingOffier', 'dateRecoreded', 'reason', 'Status'], 'safe'],
            [['complainantAge', 'accusedAge', 'id'], 'integer'],
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
        $query = Records::find();

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
            'complainantAge' => $this->complainantAge,
            'accusedAge' => $this->accusedAge,
            'dateCommited' => $this->dateCommited,
            'dateRecoreded' => $this->dateRecoreded,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'complainantName', $this->complainantName])
            ->andFilterWhere(['like', 'complainantAddress', $this->complainantAddress])
            ->andFilterWhere(['like', 'complainantContact', $this->complainantContact])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'complainantGender', $this->complainantGender])
            ->andFilterWhere(['like', 'accusedName', $this->accusedName])
            ->andFilterWhere(['like', 'accusedAddress', $this->accusedAddress])
            ->andFilterWhere(['like', 'accusedContact', $this->accusedContact])
            ->andFilterWhere(['like', 'accusedGender', $this->accusedGender])
            ->andFilterWhere(['like', 'eventNmber', $this->eventNmber])
            ->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'natureOfCrime', $this->natureOfCrime])
            ->andFilterWhere(['like', 'placeCommited', $this->placeCommited])
            ->andFilterWhere(['like', 'apprehendingOffier', $this->apprehendingOffier])
            ->andFilterWhere(['like', 'reason', $this->reason])
            ->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
