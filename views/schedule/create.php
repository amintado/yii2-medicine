<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Schedule */

$this->title = Yii::t('app', 'Create Schedule');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Schedules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
