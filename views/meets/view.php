<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Meets */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Meets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meets-view">

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
            'id',
            'expert_id',
            'expert_group_id',
            'patient_id',
            'place_id',
            'course_id',
            'status',
            'meet_type_id',
            'for_excerpt',
            'text',
            'comment',
            'time_from',
            'time_to',
        ],
    ]) ?>

</div>
