<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Establecimiento;

/**
 * EstablecimientoSearch represents the model behind the search form of `backend\models\Establecimiento`.
 */
class EstablecimientoSearch extends Establecimiento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['upz', 'apellidos_propietario', 'apellidos_representante_legal', 'ciiu1', 'ciiu2', 'ciiu3', 'direccion_comercial', 'direccion_estandar', 'direccion_notificacion', 'fecha_fin_matricula', 'fecha_matricula', 'formal', 'digito_verificacion_establecimiento', 'digito_verficacion_propietario', 'digito_verficacion_representate', 'localidad', 'correo_electronico', 'matricula', 'matricula_propietario', 'numero_identificacion_establecimiento', 'numero_identificacion_propietario', 'numero_identificacion_representante', 'nombre_comercial', 'nombres_propietario', 'observaciones', 'observation_historia', 'pagina_web', 'razon_social', 'telefono', 'tipo_historico', 'tipo_identidad_establecimiento', 'tipo_identidad_propietario', 'tipo_identidad_representante_legal'], 'safe'],
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
        $query = Establecimiento::find();

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
            ->andFilterWhere(['like', 'apellidos_propietario', $this->apellidos_propietario])
            ->andFilterWhere(['like', 'apellidos_representante_legal', $this->apellidos_representante_legal])
            ->andFilterWhere(['like', 'ciiu1', $this->ciiu1])
            ->andFilterWhere(['like', 'ciiu2', $this->ciiu2])
            ->andFilterWhere(['like', 'ciiu3', $this->ciiu3])
            ->andFilterWhere(['like', 'direccion_comercial', $this->direccion_comercial])
            ->andFilterWhere(['like', 'direccion_estandar', $this->direccion_estandar])
            ->andFilterWhere(['like', 'direccion_notificacion', $this->direccion_notificacion])
            ->andFilterWhere(['like', 'fecha_fin_matricula', $this->fecha_fin_matricula])
            ->andFilterWhere(['like', 'fecha_matricula', $this->fecha_matricula])
            ->andFilterWhere(['like', 'formal', $this->formal])
            ->andFilterWhere(['like', 'digito_verificacion_establecimiento', $this->digito_verificacion_establecimiento])
            ->andFilterWhere(['like', 'digito_verficacion_propietario', $this->digito_verficacion_propietario])
            ->andFilterWhere(['like', 'digito_verficacion_representate', $this->digito_verficacion_representate])
            ->andFilterWhere(['like', 'localidad', $this->localidad])
            ->andFilterWhere(['like', 'correo_electronico', $this->correo_electronico])
            ->andFilterWhere(['like', 'matricula', $this->matricula])
            ->andFilterWhere(['like', 'matricula_propietario', $this->matricula_propietario])
            ->andFilterWhere(['like', 'numero_identificacion_establecimiento', $this->numero_identificacion_establecimiento])
            ->andFilterWhere(['like', 'numero_identificacion_propietario', $this->numero_identificacion_propietario])
            ->andFilterWhere(['like', 'numero_identificacion_representante', $this->numero_identificacion_representante])
            ->andFilterWhere(['like', 'nombre_comercial', $this->nombre_comercial])
            ->andFilterWhere(['like', 'nombres_propietario', $this->nombres_propietario])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones])
            ->andFilterWhere(['like', 'observation_historia', $this->observation_historia])
            ->andFilterWhere(['like', 'pagina_web', $this->pagina_web])
            ->andFilterWhere(['like', 'razon_social', $this->razon_social])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'tipo_historico', $this->tipo_historico])
            ->andFilterWhere(['like', 'tipo_identidad_establecimiento', $this->tipo_identidad_establecimiento])
            ->andFilterWhere(['like', 'tipo_identidad_propietario', $this->tipo_identidad_propietario])
            ->andFilterWhere(['like', 'tipo_identidad_representante_legal', $this->tipo_identidad_representante_legal]);

        return $dataProvider;
    }
}
