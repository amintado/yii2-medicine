<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel ut8ia\medicine\models\search\ExcertGroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Expert Groups');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expert-groups-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a(Yii::t('app', 'Create Expert Groups'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete} {view}',
                'contentOptions' => [
                    'nowrap' => 'nowrap'
                ]],
            [
                'contentOptions' => ['class' => 'col-lg-2'],
                'attribute' => 'name',
                'label' => Yii::t('app', 'Group name'),
                'format' => 'html',
                'value' => function($model) {
                    return $model->name;
                },
            ],
            [
                'contentOptions' => ['class' => 'col-lg-7'],
                'attribute' => 'name',
                'label' => Yii::t('app', 'Description'),
                'format' => 'html',
                'value' => function($model) {
                    return $model->description;
                },
            ],
            [
                'contentOptions' => ['class' => 'col-lg-2'],
                'attribute' => 'name',
                'label' => Yii::t('app', 'Experts'),
                'format' => 'html',
                'value' => function($model) {
                    return count($model->experts);
                },
            ],
            [
                'contentOptions' => ['class' => 'col-lg-1'],
                'attribute' => 'name',
                'label' => Yii::t('app', 'Display color'),
                'format' => 'raw',
                'value' => function($model) {
                    return '<div class="label" style="background-color:'.$model->display_color.';">'.$model->name.'</div>';
                },
            ],
            // 'excerpt_order',

        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
