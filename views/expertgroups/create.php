<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\ExpertGroups */

$this->title = Yii::t('app', 'Create Expert Groups');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Expert Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expert-groups-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
