<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EstablecimientoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="establecimiento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'upz') ?>

    <?= $form->field($model, 'apellidos_propietario') ?>

    <?= $form->field($model, 'apellidos_representante_legal') ?>

    <?= $form->field($model, 'ciiu1') ?>

    <?php // echo $form->field($model, 'ciiu2') ?>

    <?php // echo $form->field($model, 'ciiu3') ?>

    <?php // echo $form->field($model, 'direccion_comercial') ?>

    <?php // echo $form->field($model, 'direccion_estandar') ?>

    <?php // echo $form->field($model, 'direccion_notificacion') ?>

    <?php // echo $form->field($model, 'fecha_fin_matricula') ?>

    <?php // echo $form->field($model, 'fecha_matricula') ?>

    <?php // echo $form->field($model, 'formal') ?>

    <?php // echo $form->field($model, 'digito_verificacion_establecimiento') ?>

    <?php // echo $form->field($model, 'digito_verficacion_propietario') ?>

    <?php // echo $form->field($model, 'digito_verficacion_representate') ?>

    <?php // echo $form->field($model, 'localidad') ?>

    <?php // echo $form->field($model, 'correo_electronico') ?>

    <?php // echo $form->field($model, 'matricula') ?>

    <?php // echo $form->field($model, 'matricula_propietario') ?>

    <?php // echo $form->field($model, 'numero_identificacion_establecimiento') ?>

    <?php // echo $form->field($model, 'numero_identificacion_propietario') ?>

    <?php // echo $form->field($model, 'numero_identificacion_representante') ?>

    <?php // echo $form->field($model, 'nombre_comercial') ?>

    <?php // echo $form->field($model, 'nombres_propietario') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'observation_historia') ?>

    <?php // echo $form->field($model, 'pagina_web') ?>

    <?php // echo $form->field($model, 'razon_social') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'tipo_historico') ?>

    <?php // echo $form->field($model, 'tipo_identidad_establecimiento') ?>

    <?php // echo $form->field($model, 'tipo_identidad_propietario') ?>

    <?php // echo $form->field($model, 'tipo_identidad_representante_legal') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
