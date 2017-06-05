<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\DiagnosesAppointments */

$this->title = Yii::t('app', 'Create Diagnoses Appointments');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diagnoses Appointments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnoses-appointments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
