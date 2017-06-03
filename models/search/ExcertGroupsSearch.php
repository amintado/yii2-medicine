<?php

namespace ut8ia\medicine\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ut8ia\medicine\models\ExpertGroups;

/**
 * ExcertGroupsSearch represents the model behind the search form of `ut8ia\medicine\models\ExpertGroups`.
 */
class ExcertGroupsSearch extends ExpertGroups
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_required', 'excerpt_required', 'excerpt_order'], 'integer'],
            [['name', 'description'], 'safe'],
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
        $query = ExpertGroups::find();

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
            'patient_required' => $this->patient_required,
            'excerpt_required' => $this->excerpt_required,
            'excerpt_order' => $this->excerpt_order,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
