<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Excerpts */

$this->title = Yii::t('app', 'Create Excerpts');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Excerpts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="excerpts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
