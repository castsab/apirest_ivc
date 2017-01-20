<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "entity".
 *
 * @property integer $id
 * @property string $name_entity
 *
 * @property Visit[] $visits
 */
class Entity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'entity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name_entity'], 'required'],
            [['id'], 'integer'],
            [['name_entity'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_entity' => Yii::t('app', 'Name Entity'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisits()
    {
        return $this->hasMany(Visit::className(), ['id_entity' => 'id']);
    }
    
    public static function getNameEntity($id){
        if(!empty($id)){
            $model = self::find()->where(['id'=>$id])->one();
            if($model){
                return $model->name_entity;
            }        
        }
    }
}
