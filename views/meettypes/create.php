<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\MeetTypes */

$this->title = Yii::t('app', 'Create Meet Types');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Meet Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meet-types-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
