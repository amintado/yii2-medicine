<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel ut8ia\medicine\models\search\BuildingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Buildings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buildings-index">
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a(Yii::t('app', 'Create Buildings'), ['create'], ['class' => 'btn btn-success']) ?>
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
                'contentOptions' => ['class' => 'col-lg-8 '],
                'label' => ucfirst(Yii::t('app', 'adress')),
                'attribute' => 'adress',
                'format' => 'html',
                'value' => function($model) {
                    return $model->adress;
                },
            ],
            [
                'contentOptions' => ['class' => 'col-lg-1 '],
                'label' => ucfirst(Yii::t('app', 'places')),
                'attribute' => 'places',
                'format' => 'html',
                'value' => function($model) {
                    return count($model->places);
                },
            ],

//            'lattitude',
//            'longitude',
            // 'floors',

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
