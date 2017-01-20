<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "visita".
 *
 * @property string $id
 * @property integer $id_entidad
 * @property integer $id_establecimiento
 * @property string $fecha_evento
 * @property string $causa_visita
 * @property string $estado_visita
 * @property string $concepto_visita
 * @property string $tipo_identificacion_funcionario
 * @property string $numero_identidad_funcionario
 * @property string $apellidos_funcionario
 * @property string $nombres_funcionario
 * @property string $tipo_identidad_atiende
 * @property string $numero_identidad_atiende
 * @property string $apellidos_atiende
 * @property string $nombres_atiende
 * @property string $observacion_visita
 *
 * @property Entidad $entidad
 * @property Establecimiento $establecimiento
 */
class Visita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_entidad', 'id_establecimiento'], 'required'],
            [['id_entidad', 'id_establecimiento'], 'integer'],
            [['fecha_evento'], 'string', 'max' => 10],
            [['causa_visita', 'estado_visita', 'concepto_visita'], 'string', 'max' => 3],
            [['tipo_identificacion_funcionario', 'tipo_identidad_atiende'], 'string', 'max' => 1],
            [['numero_identidad_funcionario', 'numero_identidad_atiende'], 'string', 'max' => 14],
            [['apellidos_funcionario', 'nombres_funcionario', 'apellidos_atiende', 'nombres_atiende'], 'string', 'max' => 100],
            [['observacion_visita'], 'string', 'max' => 500],
            [['id_entidad'], 'exist', 'skipOnError' => true, 'targetClass' => Entidad::className(), 'targetAttribute' => ['id_entidad' => 'id']],
            [['id_establecimiento'], 'exist', 'skipOnError' => true, 'targetClass' => Establecimiento::className(), 'targetAttribute' => ['id_establecimiento' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_entidad' => Yii::t('app', 'Id Entidad'),
            'id_establecimiento' => Yii::t('app', 'Id Establecimiento'),
            'fecha_evento' => Yii::t('app', 'Fecha Evento'),
            'causa_visita' => Yii::t('app', 'Causa Visita'),
            'estado_visita' => Yii::t('app', 'Estado Visita'),
            'concepto_visita' => Yii::t('app', 'Concepto Visita'),
            'tipo_identificacion_funcionario' => Yii::t('app', 'Tipo Identificacion Funcionario'),
            'numero_identidad_funcionario' => Yii::t('app', 'Numero Identidad Funcionario'),
            'apellidos_funcionario' => Yii::t('app', 'Apellidos Funcionario'),
            'nombres_funcionario' => Yii::t('app', 'Nombres Funcionario'),
            'tipo_identidad_atiende' => Yii::t('app', 'Tipo Identidad Atiende'),
            'numero_identidad_atiende' => Yii::t('app', 'Numero Identidad Atiende'),
            'apellidos_atiende' => Yii::t('app', 'Apellidos Atiende'),
            'nombres_atiende' => Yii::t('app', 'Nombres Atiende'),
            'observacion_visita' => Yii::t('app', 'Observacion Visita'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntidad()
    {
        return $this->hasOne(Entidad::className(), ['id' => 'id_entidad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstablecimiento()
    {
        return $this->hasOne(Establecimiento::className(), ['id' => 'id_establecimiento']);
    }
}
