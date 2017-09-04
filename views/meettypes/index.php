<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel ut8ia\medicine\models\search\MeetTypesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Meet Types');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meet-types-index">


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Meet Types'), ['create'], ['class' => 'btn btn-success']) ?>
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
                'contentOptions' => ['class' => 'col-lg-10'],
                'attribute' => 'name',
                'label' => Yii::t('app', 'Meets type'),
                'format' => 'html',
                'value' => function($model) {
                    return $model->name;
                },
            ],

            [
                'contentOptions' => ['class' => 'col-lg-2'],
                'attribute' => 'name',
                'label' => Yii::t('app', 'Meets'),
                'format' => 'html',
                'value' => function($model) {
                    return count($model->meets);
                },
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
