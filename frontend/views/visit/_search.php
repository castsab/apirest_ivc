<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VisitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_entity') ?>

    <?= $form->field($model, 'id_establishment') ?>

    <?= $form->field($model, 'date_event') ?>

    <?= $form->field($model, 'because_visit') ?>

    <?php // echo $form->field($model, 'state_visit') ?>

    <?php // echo $form->field($model, 'concept_visit') ?>

    <?php // echo $form->field($model, 'type_identification_government_employee') ?>

    <?php // echo $form->field($model, 'number_identity_government_employee') ?>

    <?php // echo $form->field($model, 'lastname_government_employee') ?>

    <?php // echo $form->field($model, 'name_government_employee') ?>

    <?php // echo $form->field($model, 'type_identity_atiende') ?>

    <?php // echo $form->field($model, 'number_identity_atiende') ?>

    <?php // echo $form->field($model, 'lastname_attends') ?>

    <?php // echo $form->field($model, 'name_attends') ?>

    <?php // echo $form->field($model, 'observation_visit') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
