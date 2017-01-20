<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EstablishmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="establishment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'upz') ?>

    <?= $form->field($model, 'lastname_owner') ?>

    <?= $form->field($model, 'lastname_legal_representative') ?>

    <?= $form->field($model, 'ciiu1') ?>

    <?php // echo $form->field($model, 'ciiu2') ?>

    <?php // echo $form->field($model, 'ciiu3') ?>

    <?php // echo $form->field($model, 'address_commercial') ?>

    <?php // echo $form->field($model, 'address_standard') ?>

    <?php // echo $form->field($model, 'address_notification') ?>

    <?php // echo $form->field($model, 'date_end_commercial_registration') ?>

    <?php // echo $form->field($model, 'date_commercial_registration') ?>

    <?php // echo $form->field($model, 'formal') ?>

    <?php // echo $form->field($model, 'digit_verification_establishment') ?>

    <?php // echo $form->field($model, 'digit_verification_owner') ?>

    <?php // echo $form->field($model, 'digit_verification_legal_representative') ?>

    <?php // echo $form->field($model, 'locality') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'commercial_registration') ?>

    <?php // echo $form->field($model, 'commercial_registration_owner') ?>

    <?php // echo $form->field($model, 'number_identification_establishment') ?>

    <?php // echo $form->field($model, 'number_identification_owner') ?>

    <?php // echo $form->field($model, 'number_identificacion_legal_representative') ?>

    <?php // echo $form->field($model, 'name_commercial') ?>

    <?php // echo $form->field($model, 'name_owner') ?>

    <?php // echo $form->field($model, 'observation') ?>

    <?php // echo $form->field($model, 'observation_history') ?>

    <?php // echo $form->field($model, 'page_web') ?>

    <?php // echo $form->field($model, 'business_name') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'type_history') ?>

    <?php // echo $form->field($model, 'type_identification_establishment') ?>

    <?php // echo $form->field($model, 'type_identification_owner') ?>

    <?php // echo $form->field($model, 'type_identification_legal_representative') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
