<?php

use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;
use Yii;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\ExpertGroups */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Expert Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expert-groups-view">



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description',
            'course_required:boolean',
            'excerpt_required:boolean',
            'excerpt_order',
            [
                'label' => Yii::t('app', 'Experts'),
                'format' => 'object',
                'value' => ['object' => $model->experts, 'view' => 'Experts/label' ]
            ],
            [
                'label' => Yii::t('app', 'Display color'),
                'format' => 'object',
                'value' => ['object' => $model, 'view' => 'label']
            ]
        ],
    ]) ?>

</div>
