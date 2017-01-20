<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "establecimiento".
 *
 * @property integer $id
 * @property string $upz
 * @property string $apellidos_propietario
 * @property string $apellidos_representante_legal
 * @property string $ciiu1
 * @property string $ciiu2
 * @property string $ciiu3
 * @property string $direccion_comercial
 * @property string $direccion_estandar
 * @property string $direccion_notificacion
 * @property string $fecha_fin_matricula
 * @property string $fecha_matricula
 * @property string $formal
 * @property string $digito_verificacion_establecimiento
 * @property string $digito_verficacion_propietario
 * @property string $digito_verficacion_representate
 * @property string $localidad
 * @property string $correo_electronico
 * @property string $matricula
 * @property string $matricula_propietario
 * @property string $numero_identificacion_establecimiento
 * @property string $numero_identificacion_propietario
 * @property string $numero_identificacion_representante
 * @property string $nombre_comercial
 * @property string $nombres_propietario
 * @property string $observaciones
 * @property string $observation_historia
 * @property string $pagina_web
 * @property string $razon_social
 * @property string $telefono
 * @property string $tipo_historico
 * @property string $tipo_identidad_establecimiento
 * @property string $tipo_identidad_propietario
 * @property string $tipo_identidad_representante_legal
 */
class Establecimiento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'establecimiento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['upz', 'direccion_estandar', 'direccion_notificacion', 'localidad', 'nombre_comercial', 'nombres_propietario', 'observaciones', 'observation_historia', 'pagina_web', 'razon_social'], 'string', 'max' => 500],
            [['apellidos_propietario', 'apellidos_representante_legal', 'correo_electronico', 'telefono'], 'string', 'max' => 100],
            [['ciiu1', 'ciiu2', 'ciiu3', 'fecha_fin_matricula', 'fecha_matricula'], 'string', 'max' => 10],
            [['direccion_comercial'], 'string', 'max' => 255],
            [['formal', 'digito_verificacion_establecimiento', 'digito_verficacion_propietario', 'digito_verficacion_representate', 'tipo_historico', 'tipo_identidad_establecimiento', 'tipo_identidad_propietario', 'tipo_identidad_representante_legal'], 'string', 'max' => 1],
            [['matricula', 'matricula_propietario'], 'string', 'max' => 12],
            [['numero_identificacion_establecimiento', 'numero_identificacion_propietario', 'numero_identificacion_representante'], 'string', 'max' => 14],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'upz' => Yii::t('app', 'Upz'),
            'apellidos_propietario' => Yii::t('app', 'Apellidos Propietario'),
            'apellidos_representante_legal' => Yii::t('app', 'Apellidos Representante Legal'),
            'ciiu1' => Yii::t('app', 'Ciiu1'),
            'ciiu2' => Yii::t('app', 'Ciiu2'),
            'ciiu3' => Yii::t('app', 'Ciiu3'),
            'direccion_comercial' => Yii::t('app', 'Direccion Comercial'),
            'direccion_estandar' => Yii::t('app', 'Direccion Estandar'),
            'direccion_notificacion' => Yii::t('app', 'Direccion Notificacion'),
            'fecha_fin_matricula' => Yii::t('app', 'Fecha Fin Matricula'),
            'fecha_matricula' => Yii::t('app', 'Fecha Matricula'),
            'formal' => Yii::t('app', 'Formal'),
            'digito_verificacion_establecimiento' => Yii::t('app', 'Digito Verificacion Establecimiento'),
            'digito_verficacion_propietario' => Yii::t('app', 'Digito Verficacion Propietario'),
            'digito_verficacion_representate' => Yii::t('app', 'Digito Verficacion Representate'),
            'localidad' => Yii::t('app', 'Localidad'),
            'correo_electronico' => Yii::t('app', 'Correo Electronico'),
            'matricula' => Yii::t('app', 'Matricula'),
            'matricula_propietario' => Yii::t('app', 'Matricula Propietario'),
            'numero_identificacion_establecimiento' => Yii::t('app', 'Numero Identificacion Establecimiento'),
            'numero_identificacion_propietario' => Yii::t('app', 'Numero Identificacion Propietario'),
            'numero_identificacion_representante' => Yii::t('app', 'Numero Identificacion Representante'),
            'nombre_comercial' => Yii::t('app', 'Nombre Comercial'),
            'nombres_propietario' => Yii::t('app', 'Nombres Propietario'),
            'observaciones' => Yii::t('app', 'Observaciones'),
            'observation_historia' => Yii::t('app', 'Observation Historia'),
            'pagina_web' => Yii::t('app', 'Pagina Web'),
            'razon_social' => Yii::t('app', 'Razon Social'),
            'telefono' => Yii::t('app', 'Telefono'),
            'tipo_historico' => Yii::t('app', 'Tipo Historico'),
            'tipo_identidad_establecimiento' => Yii::t('app', 'Tipo Identidad Establecimiento'),
            'tipo_identidad_propietario' => Yii::t('app', 'Tipo Identidad Propietario'),
            'tipo_identidad_representante_legal' => Yii::t('app', 'Tipo Identidad Representante Legal'),
        ];
    }
}
