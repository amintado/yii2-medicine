<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Courses */

$this->title = $model->number;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Courses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'number',
            [
                'label' => Yii::t('app', 'Date start'),
                'format' => 'html',
                'value' => Yii::$app->time->date2front($model->date_start)
            ],
            [
                'label' => Yii::t('app', 'Date end'),
                'format' => 'html',
                'value' => Yii::$app->time->date2front($model->date_end)
            ],
            'status',
        ],
    ]) ?>

</div>
