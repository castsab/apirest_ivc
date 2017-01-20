<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Establecimiento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="establecimiento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'upz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos_propietario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos_representante_legal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciiu1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciiu2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciiu3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_comercial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_estandar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_notificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_fin_matricula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_matricula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'formal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'digito_verificacion_establecimiento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'digito_verficacion_propietario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'digito_verficacion_representate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo_electronico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matricula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matricula_propietario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_identificacion_establecimiento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_identificacion_propietario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_identificacion_representante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_comercial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombres_propietario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observation_historia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pagina_web')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'razon_social')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_historico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_identidad_establecimiento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_identidad_propietario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_identidad_representante_legal')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
