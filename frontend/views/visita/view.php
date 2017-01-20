<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Visita */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Visitas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visita-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_entidad',
            'id_establecimiento',
            'fecha_evento',
            'causa_visita',
            'estado_visita',
            'concepto_visita',
            'tipo_identificacion_funcionario',
            'numero_identidad_funcionario',
            'apellidos_funcionario',
            'nombres_funcionario',
            'tipo_identidad_atiende',
            'numero_identidad_atiende',
            'apellidos_atiende',
            'nombres_atiende',
            'observacion_visita',
        ],
    ]) ?>

</div>
