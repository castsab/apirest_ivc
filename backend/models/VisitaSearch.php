<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Visita;

/**
 * VisitaSearch represents the model behind the search form of `backend\models\Visita`.
 */
class VisitaSearch extends Visita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_entidad', 'id_establecimiento'], 'integer'],
            [['fecha_evento', 'causa_visita', 'estado_visita', 'concepto_visita', 'tipo_identificacion_funcionario', 'numero_identidad_funcionario', 'apellidos_funcionario', 'nombres_funcionario', 'tipo_identidad_atiende', 'numero_identidad_atiende', 'apellidos_atiende', 'nombres_atiende', 'observacion_visita'], 'safe'],
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
        $query = Visita::find();

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
            'id_entidad' => $this->id_entidad,
            'id_establecimiento' => $this->id_establecimiento,
        ]);

        $query->andFilterWhere(['like', 'fecha_evento', $this->fecha_evento])
            ->andFilterWhere(['like', 'causa_visita', $this->causa_visita])
            ->andFilterWhere(['like', 'estado_visita', $this->estado_visita])
            ->andFilterWhere(['like', 'concepto_visita', $this->concepto_visita])
            ->andFilterWhere(['like', 'tipo_identificacion_funcionario', $this->tipo_identificacion_funcionario])
            ->andFilterWhere(['like', 'numero_identidad_funcionario', $this->numero_identidad_funcionario])
            ->andFilterWhere(['like', 'apellidos_funcionario', $this->apellidos_funcionario])
            ->andFilterWhere(['like', 'nombres_funcionario', $this->nombres_funcionario])
            ->andFilterWhere(['like', 'tipo_identidad_atiende', $this->tipo_identidad_atiende])
            ->andFilterWhere(['like', 'numero_identidad_atiende', $this->numero_identidad_atiende])
            ->andFilterWhere(['like', 'apellidos_atiende', $this->apellidos_atiende])
            ->andFilterWhere(['like', 'nombres_atiende', $this->nombres_atiende])
            ->andFilterWhere(['like', 'observacion_visita', $this->observacion_visita]);
        
        if($id != null)
            $query->andFilterWhere(['id_establecimiento'=>$id]);

        return $dataProvider;
    }
}
