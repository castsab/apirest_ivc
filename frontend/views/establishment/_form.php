<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Establishment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="establishment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'upz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname_legal_representative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciiu1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciiu2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciiu3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_commercial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_standard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_notification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_end_commercial_registration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_commercial_registration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'formal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'digit_verification_establishment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'digit_verification_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'digit_verification_legal_representative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'locality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commercial_registration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commercial_registration_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_identification_establishment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_identification_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_identificacion_legal_representative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_commercial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observation_history')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'page_web')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_history')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_identification_establishment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_identification_owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_identification_legal_representative')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
