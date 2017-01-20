<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Establishment */

$this->title = Yii::t('app', 'Create Establishment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Establishments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="establishment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
