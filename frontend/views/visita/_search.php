<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VisitaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_entidad') ?>

    <?= $form->field($model, 'id_establecimiento') ?>

    <?= $form->field($model, 'fecha_evento') ?>

    <?= $form->field($model, 'causa_visita') ?>

    <?php // echo $form->field($model, 'estado_visita') ?>

    <?php // echo $form->field($model, 'concepto_visita') ?>

    <?php // echo $form->field($model, 'tipo_identificacion_funcionario') ?>

    <?php // echo $form->field($model, 'numero_identidad_funcionario') ?>

    <?php // echo $form->field($model, 'apellidos_funcionario') ?>

    <?php // echo $form->field($model, 'nombres_funcionario') ?>

    <?php // echo $form->field($model, 'tipo_identidad_atiende') ?>

    <?php // echo $form->field($model, 'numero_identidad_atiende') ?>

    <?php // echo $form->field($model, 'apellidos_atiende') ?>

    <?php // echo $form->field($model, 'nombres_atiende') ?>

    <?php // echo $form->field($model, 'observacion_visita') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
