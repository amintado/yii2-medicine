<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Buildings */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Buildings',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Buildings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="buildings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>