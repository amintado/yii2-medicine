<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Experts */

$this->title = Yii::t('app', 'Create Experts');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Experts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experts-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
