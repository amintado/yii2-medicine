<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Buildings */

$this->title = Yii::t('app', 'Create Buildings');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Buildings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buildings-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
