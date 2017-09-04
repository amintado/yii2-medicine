<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Courses */

$this->title = Yii::t('app', 'Create Courses');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Courses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courses-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
