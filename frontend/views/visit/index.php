<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = Yii::t('app', 'Visits');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'id_entity',
                'value'=> function($model){
                    return \backend\models\Entity::getNameEntity($model->id_entity);
                }
            ],
            
            'concept_visit',
            
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>''
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
