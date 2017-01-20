<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "visit".
 *
 * @property string $id
 * @property integer $id_entity
 * @property integer $id_establishment
 * @property string $date_event
 * @property string $because_visit
 * @property string $state_visit
 * @property string $concept_visit
 * @property string $type_identification_government_employee
 * @property string $number_identity_government_employee
 * @property string $lastname_government_employee
 * @property string $name_government_employee
 * @property string $type_identity_atiende
 * @property string $number_identity_atiende
 * @property string $lastname_attends
 * @property string $name_attends
 * @property string $observation_visit
 *
 * @property Entity $entity
 * @property Establishment $establishment
 */
class Visit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_entity', 'id_establishment'], 'required'],
            [['id_entity', 'id_establishment'], 'integer'],
            [['date_event'], 'string', 'max' => 20],
            [['because_visit', 'state_visit', 'concept_visit'], 'string', 'max' => 3],
            [['type_identification_government_employee', 'type_identity_atiende'], 'string', 'max' => 1],
            [['number_identity_government_employee', 'number_identity_atiende'], 'string', 'max' => 14],
            [['lastname_government_employee', 'name_government_employee', 'lastname_attends', 'name_attends'], 'string', 'max' => 100],
            [['observation_visit'], 'string', 'max' => 500],
            [['id_entity'], 'exist', 'skipOnError' => true, 'targetClass' => Entity::className(), 'targetAttribute' => ['id_entity' => 'id']],
            [['id_establishment'], 'exist', 'skipOnError' => true, 'targetClass' => Establishment::className(), 'targetAttribute' => ['id_establishment' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_entity' => Yii::t('app', 'Id Entity'),
            'id_establishment' => Yii::t('app', 'Id Establishment'),
            'date_event' => Yii::t('app', 'Date Event'),
            'because_visit' => Yii::t('app', 'Because Visit'),
            'state_visit' => Yii::t('app', 'State Visit'),
            'concept_visit' => Yii::t('app', 'Concept Visit'),
            'type_identification_government_employee' => Yii::t('app', 'Type Identification Government Employee'),
            'number_identity_government_employee' => Yii::t('app', 'Number Identity Government Employee'),
            'lastname_government_employee' => Yii::t('app', 'Lastname Government Employee'),
            'name_government_employee' => Yii::t('app', 'Name Government Employee'),
            'type_identity_atiende' => Yii::t('app', 'Type Identity Atiende'),
            'number_identity_atiende' => Yii::t('app', 'Number Identity Atiende'),
            'lastname_attends' => Yii::t('app', 'Lastname Attends'),
            'name_attends' => Yii::t('app', 'Name Attends'),
            'observation_visit' => Yii::t('app', 'Observation Visit'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntity()
    {
        return $this->hasOne(Entity::className(), ['id' => 'id_entity']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstablishment()
    {
        return $this->hasOne(Establishment::className(), ['id' => 'id_establishment']);
    }
}
