<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Patients */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Patients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patients-view">



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
            'name',
            'surname',
            'patronymic',
            'card_number',
            'sex',
            'birthdate',
            'region_id',
            'city',
            'city_id',
            'district',
            'district_a',
            'user_id',
        ],
    ]) ?>

</div>
