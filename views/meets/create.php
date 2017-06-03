<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Meets */

$this->title = Yii::t('app', 'Create Meets');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Meets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meets-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
