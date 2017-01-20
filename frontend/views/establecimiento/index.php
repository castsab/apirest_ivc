<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EstablecimientoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Establecimientos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="establecimiento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <p>
        <?php //echo Html::a(Yii::t('app', 'Create Establecimiento'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'upz',
            //'apellidos_propietario',
            //'apellidos_representante_legal',
            //'ciiu1',
            // 'ciiu2',
            // 'ciiu3',
            // 'direccion_comercial',
            // 'direccion_estandar',
            // 'direccion_notificacion',
            // 'fecha_fin_matricula',
            // 'fecha_matricula',
            // 'formal',
            // 'digito_verificacion_establecimiento',
            // 'digito_verficacion_propietario',
            // 'digito_verficacion_representate',
            // 'localidad',
            // 'correo_electronico',
               'matricula',
            // 'matricula_propietario',
            // 'numero_identificacion_establecimiento',
            // 'numero_identificacion_propietario',
            // 'numero_identificacion_representante',
             'nombre_comercial',
            // 'nombres_propietario',
            // 'observaciones',
            // 'observation_historia',
            // 'pagina_web',
             'razon_social',
            // 'telefono',
            // 'tipo_historico',
            // 'tipo_identidad_establecimiento',
            // 'tipo_identidad_propietario',
            // 'tipo_identidad_representante_legal',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}',
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
