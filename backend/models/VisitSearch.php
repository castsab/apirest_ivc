<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Visit;

/**
 * VisitSearch represents the model behind the search form of `backend\models\Visit`.
 */
class VisitSearch extends Visit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_entity', 'id_establishment'], 'integer'],
            [['date_event', 'because_visit', 'state_visit', 'concept_visit', 'type_identification_government_employee', 'number_identity_government_employee', 'lastname_government_employee', 'name_government_employee', 'type_identity_atiende', 'number_identity_atiende', 'lastname_attends', 'name_attends', 'observation_visit'], 'safe'],
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
    public function search($params,$id=null)
    {
        $query = Visit::find();

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
            'id_entity' => $this->id_entity,
            'id_establishment' => $this->id_establishment,
        ]);

        $query->andFilterWhere(['like', 'date_event', $this->date_event])
            ->andFilterWhere(['like', 'because_visit', $this->because_visit])
            ->andFilterWhere(['like', 'state_visit', $this->state_visit])
            ->andFilterWhere(['like', 'concept_visit', $this->concept_visit])
            ->andFilterWhere(['like', 'type_identification_government_employee', $this->type_identification_government_employee])
            ->andFilterWhere(['like', 'number_identity_government_employee', $this->number_identity_government_employee])
            ->andFilterWhere(['like', 'lastname_government_employee', $this->lastname_government_employee])
            ->andFilterWhere(['like', 'name_government_employee', $this->name_government_employee])
            ->andFilterWhere(['like', 'type_identity_atiende', $this->type_identity_atiende])
            ->andFilterWhere(['like', 'number_identity_atiende', $this->number_identity_atiende])
            ->andFilterWhere(['like', 'lastname_attends', $this->lastname_attends])
            ->andFilterWhere(['like', 'name_attends', $this->name_attends])
            ->andFilterWhere(['like', 'observation_visit', $this->observation_visit]);
        
        if($id != null)
            $query->andFilterWhere(['id_establishment'=>$id]);

        return $dataProvider;
    }
}
