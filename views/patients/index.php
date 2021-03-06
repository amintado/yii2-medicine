<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel ut8ia\medicine\models\search\PatientsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Patients');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patients-index">


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Patients'), ['create'], ['class' => 'btn btn-success']) ?>
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
                'buttons' => [
                    'update' => function($url, $model) {
                        if ($model->canUpdate()) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                'title' => Yii::t('app', 'Edit'),
                                'data-pjax' => 1,
                                'class' => 'grid-edit-action'
                            ]);
                        }
                    }
                ]
            ],
            [
                'contentOptions' => ['class' => 'col-lg-3'],
                'attribute' => 'patient_id',
                'label' => Yii::t('app', 'Patient'),
                'format' => 'object',
                'value' => function($model) {
                    return $model;
                },
            ],
            [
                'contentOptions' => ['class' => 'col-lg-3'],
                'attribute' => 'card_number',
                'label' => Yii::t('app', 'Card number'),
                'format' => 'html',
                'value' => function($model) {
                    return $model->card_number;
                },
            ],
            [
                'contentOptions' => ['class' => 'col-lg-2'],
                'attribute' => 'birthdate',
                'label' => Yii::t('app', 'Birth date'),
                'format' => 'html',
                'value' => function($model) {
                    return Yii::$app->time->date2front($model->birthdate);
                },
            ],
            [
                'contentOptions' => ['class' => 'col-lg-2'],
                'attribute' => 'courses',
                'label' => Yii::t('app', 'Courses'),
                'format' => 'html',
                'value' => function($model) {
                    return count($model->courses);
                },
            ],
            [
                'contentOptions' => ['class' => 'col-lg-2'],
                'attribute' => 'meets',
                'label' => Yii::t('app', 'Meets'),
                'format' => 'html',
                'value' => function($model) {
                    return count($model->meets);
                },
            ],
            // 'sex',
            // 'birthdate',
            // 'region_id',
            // 'city',
            // 'city_id',
            // 'district',
            // 'district_a',
            // 'user_id',
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
