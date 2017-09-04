<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Meets */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Meets',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Meets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="meets-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
