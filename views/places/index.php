<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel ut8ia\medicine\models\search\PlacesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Places');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="places-index">


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Places'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete} {view}',
                'contentOptions' => [
                    'nowrap' => 'nowrap'
                ],
            ],
            [
                'contentOptions' => ['class' => 'col-lg-2 '],
                'label' => ucfirst(Yii::t('app', 'name')),
                'attribute' => 'name',
                'format' => 'html',
                'value' => function($model) {
                    return $model->name;
                },
            ],
            [
                'contentOptions' => ['class' => 'col-lg-2 '],
                'label' => ucfirst(Yii::t('app', 'building')),
                'attribute' => 'name',
                'format' => 'object',
                'value' => function($model) {
                    return $model->buildings;
                },
            ],
            [
                'contentOptions' => ['class' => 'col-lg-8 '],
                'label' => ucfirst(Yii::t('app', 'experts')),
                'attribute' => 'experts',
                'format' => 'object',
                'value' => function($model) {
                    return $model->experts;
                },
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
