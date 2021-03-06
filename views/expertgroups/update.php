<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\ExpertGroups */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Expert Groups',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Expert Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="expert-groups-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
