<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "entidad".
 *
 * @property integer $id
 * @property string $nombre_entidad
 *
 * @property Visita[] $visitas
 */
class Entidad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'entidad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nombre_entidad'], 'required'],
            [['id'], 'integer'],
            [['nombre_entidad'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre_entidad' => Yii::t('app', 'Nombre Entidad'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitas()
    {
        return $this->hasMany(Visita::className(), ['id_entidad' => 'id']);
    }
    
    public static function getNameEntity($id){
        if(!empty($id)){
            $model = self::find()->where(['id'=>$id])->one();
            if($model){
                return $model->nombre_entidad;
            }        
        }
        
    }
}
