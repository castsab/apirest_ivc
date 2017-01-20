<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Establishment;

/**
 * EstablishmentSearch represents the model behind the search form of `backend\models\Establishment`.
 */
class EstablishmentSearch extends Establishment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['upz', 'lastname_owner', 'lastname_legal_representative', 'ciiu1', 'ciiu2', 'ciiu3', 'address_commercial', 'address_standard', 'address_notification', 'date_end_commercial_registration', 'date_commercial_registration', 'formal', 'digit_verification_establishment', 'digit_verification_owner', 'digit_verification_legal_representative', 'locality', 'email', 'commercial_registration', 'commercial_registration_owner', 'number_identification_establishment', 'number_identification_owner', 'number_identificacion_legal_representative', 'name_commercial', 'name_owner', 'observation', 'observation_history', 'page_web', 'business_name', 'phone', 'type_history', 'type_identification_establishment', 'type_identification_owner', 'type_identification_legal_representative'], 'safe'],
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
        $query = Establishment::find();

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

        $query->andFilterWhere(['like', 'upz', $this->upz])
            ->andFilterWhere(['like', 'lastname_owner', $this->lastname_owner])
            ->andFilterWhere(['like', 'lastname_legal_representative', $this->lastname_legal_representative])
            ->andFilterWhere(['like', 'ciiu1', $this->ciiu1])
            ->andFilterWhere(['like', 'ciiu2', $this->ciiu2])
            ->andFilterWhere(['like', 'ciiu3', $this->ciiu3])
            ->andFilterWhere(['like', 'address_commercial', $this->address_commercial])
            ->andFilterWhere(['like', 'address_standard', $this->address_standard])
            ->andFilterWhere(['like', 'address_notification', $this->address_notification])
            ->andFilterWhere(['like', 'date_end_commercial_registration', $this->date_end_commercial_registration])
            ->andFilterWhere(['like', 'date_commercial_registration', $this->date_commercial_registration])
            ->andFilterWhere(['like', 'formal', $this->formal])
            ->andFilterWhere(['like', 'digit_verification_establishment', $this->digit_verification_establishment])
            ->andFilterWhere(['like', 'digit_verification_owner', $this->digit_verification_owner])
            ->andFilterWhere(['like', 'digit_verification_legal_representative', $this->digit_verification_legal_representative])
            ->andFilterWhere(['like', 'locality', $this->locality])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'commercial_registration', $this->commercial_registration])
            ->andFilterWhere(['like', 'commercial_registration_owner', $this->commercial_registration_owner])
            ->andFilterWhere(['like', 'number_identification_establishment', $this->number_identification_establishment])
            ->andFilterWhere(['like', 'number_identification_owner', $this->number_identification_owner])
            ->andFilterWhere(['like', 'number_identificacion_legal_representative', $this->number_identificacion_legal_representative])
            ->andFilterWhere(['like', 'name_commercial', $this->name_commercial])
            ->andFilterWhere(['like', 'name_owner', $this->name_owner])
            ->andFilterWhere(['like', 'observation', $this->observation])
            ->andFilterWhere(['like', 'observation_history', $this->observation_history])
            ->andFilterWhere(['like', 'page_web', $this->page_web])
            ->andFilterWhere(['like', 'business_name', $this->business_name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'type_history', $this->type_history])
            ->andFilterWhere(['like', 'type_identification_establishment', $this->type_identification_establishment])
            ->andFilterWhere(['like', 'type_identification_owner', $this->type_identification_owner])
            ->andFilterWhere(['like', 'type_identification_legal_representative', $this->type_identification_legal_representative]);

        return $dataProvider;
    }
}
