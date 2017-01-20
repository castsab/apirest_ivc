<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Visit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_entity')->textInput() ?>

    <?= $form->field($model, 'id_establishment')->textInput() ?>

    <?= $form->field($model, 'date_event')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'because_visit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state_visit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'concept_visit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_identification_government_employee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_identity_government_employee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname_government_employee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_government_employee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_identity_atiende')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_identity_atiende')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname_attends')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_attends')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observation_visit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
