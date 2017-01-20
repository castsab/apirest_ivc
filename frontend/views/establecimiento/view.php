<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Establecimiento */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Establecimientos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="establecimiento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'upz',
            'apellidos_propietario',
            'apellidos_representante_legal',
            'ciiu1',
            'ciiu2',
            'ciiu3',
            'direccion_comercial',
            'direccion_estandar',
            'direccion_notificacion',
            'fecha_fin_matricula',
            'fecha_matricula',
            'formal',
            'digito_verificacion_establecimiento',
            'digito_verficacion_propietario',
            'digito_verficacion_representate',
            'localidad',
            'correo_electronico',
            'matricula',
            'matricula_propietario',
            'numero_identificacion_establecimiento',
            'numero_identificacion_propietario',
            'numero_identificacion_representante',
            'nombre_comercial',
            'nombres_propietario',
            'observaciones',
            'observation_historia',
            'pagina_web',
            'razon_social',
            'telefono',
            'tipo_historico',
            'tipo_identidad_establecimiento',
            'tipo_identidad_propietario',
            'tipo_identidad_representante_legal',
        ],
    ]) ?>

</div>

<?php 
echo $this->render('/visita/index', [
    'searchModel' => $searchModelVisita,
    'dataProvider' => $dataProviderVisita,
    'id_establecimiento' => $model->id
]); 
?>
