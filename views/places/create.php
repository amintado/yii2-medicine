<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Places */

$this->title = Yii::t('app', 'Create Places');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Places'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="places-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
