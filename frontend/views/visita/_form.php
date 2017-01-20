<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Visita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_entidad')->textInput() ?>

    <?= $form->field($model, 'id_establecimiento')->textInput() ?>

    <?= $form->field($model, 'fecha_evento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'causa_visita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_visita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'concepto_visita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_identificacion_funcionario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_identidad_funcionario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos_funcionario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombres_funcionario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_identidad_atiende')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_identidad_atiende')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos_atiende')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombres_atiende')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observacion_visita')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
