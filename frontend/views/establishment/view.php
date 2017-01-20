<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Establishment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Establishments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="establishment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'upz',
            'lastname_owner',
            'lastname_legal_representative',
            'ciiu1',
            'ciiu2',
            'ciiu3',
            'address_commercial',
            'address_standard',
            'address_notification',
            'date_end_commercial_registration',
            'date_commercial_registration',
            'formal',
            'digit_verification_establishment',
            'digit_verification_owner',
            'digit_verification_legal_representative',
            'locality',
            'email:email',
            'commercial_registration',
            'commercial_registration_owner',
            'number_identification_establishment',
            'number_identification_owner',
            'number_identificacion_legal_representative',
            'name_commercial',
            'name_owner',
            'observation',
            'observation_history',
            'page_web',
            'business_name',
            'phone',
            'type_history',
            'type_identification_establishment',
            'type_identification_owner',
            'type_identification_legal_representative',
        ],
    ]) ?>

</div>

<?php 
echo $this->render('/visit/index', [
    'searchModel' => $searchModelVisit,
    'dataProvider' => $dataProviderVisit,
    'id_establishment' => $model->id
]); 
?>

