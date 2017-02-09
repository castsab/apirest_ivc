<?php

namespace backend\models; 

use Yii; 

/** 
 * This is the model class for table "establishment". 
 * 
 * @property int $id
 * @property string $upz
 * @property string $lastname_owner
 * @property string $lastname_legal_representative
 * @property string $ciiu1
 * @property string $ciiu2
 * @property string $ciiu3
 * @property string $address_commercial
 * @property string $address_standard
 * @property string $address_notification
 * @property string $date_end_commercial_registration
 * @property string $date_commercial_registration
 * @property string $formal
 * @property string $digit_verification_establishment
 * @property string $digit_verification_owner
 * @property string $digit_verification_legal_representative
 * @property string $locality
 * @property string $email
 * @property string $commercial_registration
 * @property string $commercial_registration_owner
 * @property string $number_identification_establishment
 * @property string $number_identification_owner
 * @property string $number_identificacion_legal_representative
 * @property string $name_commercial
 * @property string $name_owner
 * @property string $observation
 * @property string $observation_history
 * @property string $page_web
 * @property string $business_name
 * @property string $phone
 * @property string $type_history
 * @property string $type_identification_establishment
 * @property string $type_identification_owner
 * @property string $type_identification_legal_representative
 * @property string $commune
 * @property string $name_legal_representative
 * @property string $date_last_renewal
 * @property string $neighborhood
 * @property string $localization_status
 * @property string $X_final
 * @property string $Y_final
 * @property string $category_code
 * @property string $subsidiary
 * @property string $locality_code
 * @property string $locality_name
 * @property string $upz_code
 * @property string $neighborhood_code
 * @property string $phone_two
 * @property string $type_establishment_code
 * @property string $name_type_establishment
 * @property string $name_economic_activity
 * 
 * @property Visit[] $visits
 */

class Establishment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'establishment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['upz', 'address_standard', 'address_notification', 'locality', 'name_commercial', 'name_owner', 'observation', 'observation_history', 'page_web', 'business_name', 'name_legal_representative'], 'string', 'max' => 500],
            [['lastname_owner', 'lastname_legal_representative', 'email', 'phone', 'commune', 'date_last_renewal', 'neighborhood', 'localization_status', 'X_final', 'Y_final', 'category_code'], 'string', 'max' => 100],
            [['ciiu1', 'ciiu2', 'ciiu3', 'type_identification_establishment', 'type_identification_owner', 'type_identification_legal_representative', 'locality_code'], 'string', 'max' => 10],
            [['address_commercial'], 'string', 'max' => 255],
            [['date_end_commercial_registration', 'date_commercial_registration'], 'string', 'max' => 20],
            [['formal', 'digit_verification_establishment', 'digit_verification_owner', 'digit_verification_legal_representative', 'type_history'], 'string', 'max' => 1],
            [['commercial_registration', 'commercial_registration_owner'], 'string', 'max' => 12],
            [['number_identification_establishment', 'number_identification_owner', 'number_identificacion_legal_representative'], 'string', 'max' => 30],
            [['subsidiary'], 'string', 'max' => 50],
            [['locality_name'], 'string', 'max' => 60],
            [['upz_code'], 'string', 'max' => 3],
            [['neighborhood_code'], 'string', 'max' => 7],
            [['phone_two'], 'string', 'max' => 15],
            [['type_establishment_code'], 'string', 'max' => 8],
            [['name_type_establishment', 'name_economic_activity'], 'string', 'max' => 150],
            
            [['business_name'], 'required'],
            [['commercial_registration','business_name'], 'unique'],
            
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
            'lastname_owner' => Yii::t('app', 'Lastname Owner'),
            'lastname_legal_representative' => Yii::t('app', 'Lastname Legal Representative'),
            'ciiu1' => Yii::t('app', 'Ciiu1'),
            'ciiu2' => Yii::t('app', 'Ciiu2'),
            'ciiu3' => Yii::t('app', 'Ciiu3'),
            'address_commercial' => Yii::t('app', 'Address Commercial'),
            'address_standard' => Yii::t('app', 'Address Standard'),
            'address_notification' => Yii::t('app', 'Address Notification'),
            'date_end_commercial_registration' => Yii::t('app', 'Date End Commercial Registration'),
            'date_commercial_registration' => Yii::t('app', 'Date Commercial Registration'),
            'formal' => Yii::t('app', 'Formal'),
            'digit_verification_establishment' => Yii::t('app', 'Digit Verification Establishment'),
            'digit_verification_owner' => Yii::t('app', 'Digit Verification Owner'),
            'digit_verification_legal_representative' => Yii::t('app', 'Digit Verification Legal Representative'),
            'locality' => Yii::t('app', 'Locality'),
            'email' => Yii::t('app', 'Email'),
            'commercial_registration' => Yii::t('app', 'Commercial Registration'),
            'commercial_registration_owner' => Yii::t('app', 'Commercial Registration Owner'),
            'number_identification_establishment' => Yii::t('app', 'Number Identification Establishment'),
            'number_identification_owner' => Yii::t('app', 'Number Identification Owner'),
            'number_identificacion_legal_representative' => Yii::t('app', 'Number Identificacion Legal Representative'),
            'name_commercial' => Yii::t('app', 'Name Commercial'),
            'name_owner' => Yii::t('app', 'Name Owner'),
            'observation' => Yii::t('app', 'Observation'),
            'observation_history' => Yii::t('app', 'Observation History'),
            'page_web' => Yii::t('app', 'Page Web'),
            'business_name' => Yii::t('app', 'Business Name'),
            'phone' => Yii::t('app', 'Phone'),
            'type_history' => Yii::t('app', 'Type History'),
            'type_identification_establishment' => Yii::t('app', 'Type Identification Establishment'),
            'type_identification_owner' => Yii::t('app', 'Type Identification Owner'),
            'type_identification_legal_representative' => Yii::t('app', 'Type Identification Legal Representative'),
            'commune' => Yii::t('app', 'Commune'),
            'name_legal_representative' => Yii::t('app', 'Name Legal Representative'),
            'date_last_renewal' => Yii::t('app', 'Date Last Renewal'),
            'neighborhood' => Yii::t('app', 'Neighborhood'),
            'localization_status' => Yii::t('app', 'Localization Status'),
            'X_final' => Yii::t('app', 'X Final'),
            'Y_final' => Yii::t('app', 'Y Final'),
            'category_code' => Yii::t('app', 'Category Code'),
            'subsidiary' => Yii::t('app', 'Subsidiary'),
            'locality_code' => Yii::t('app', 'Locality Code'),
            'locality_name' => Yii::t('app', 'Locality Name'),
            'upz_code' => Yii::t('app', 'Upz Code'),
            'neighborhood_code' => Yii::t('app', 'Neighborhood Code'),
            'phone_two' => Yii::t('app', 'Phone Two'),
            'type_establishment_code' => Yii::t('app', 'Type Establishment Code'),
            'name_type_establishment' => Yii::t('app', 'Name Type Establishment'),
            'name_economic_activity' => Yii::t('app', 'Name Economic Activity'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisits()
    {
        return $this->hasMany(Visit::className(), ['id_establishment' => 'id']);
    }
    
    public static function getId($commercial_registration){
        $result="";
        $model= self::find()->where(['commercial_registration'=>$commercial_registration])->one();
        if ($model) {
            $result= $model->id;
        }
        return $result;
    }
    
    public function checkCharactersNotValid($attribute){
        if($this->$attribute == '?')
            $this->addError($attribute,'Characters ? not valid');
    }

}
