<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel ut8ia\medicine\models\search\CoursesListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Courses Lists');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courses-list-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Courses List'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete} {view}',
                'contentOptions' => [
                    'nowrap' => 'nowrap'
                ]],

            [
                'contentOptions' => ['class' => 'col-lg-1'],
                'attribute' => 'number',
                'label' => Yii::t('app', 'Course number'),
                'format' => 'html',
                'value' => function($model) {
                    return $model->courses->number;
                },
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
