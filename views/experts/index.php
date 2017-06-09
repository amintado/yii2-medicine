<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use Yii;

/* @var $this yii\web\View */
/* @var $searchModel ut8ia\medicine\models\search\ExpertsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Experts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Experts'), ['create'], ['class' => 'btn btn-success']) ?>
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
                'contentOptions' => ['class' => 'col-lg-8 '],
                'label' => Yii::t('app', 'Expert'),
                'attribute' => 'surname',
                'format' => 'html',
                'value' => function($model) {
                    return $model->fullName();
                },
            ],
            [
                'contentOptions' => ['class' => 'col-lg-8 '],
                'label' => Yii::t('app', 'Expert'),
                'attribute' => 'expertGroups',
                'format' => 'html',
                'value' => function($model) {
                    return $model->fullName();
                },
            ],
//            'id',
//            'username',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
            // 'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'surname',
            // 'name',
            // 'patronymic',
            // 'short_info',
            // 'info',
            // 'images',
            // 'specialization',
            // 'slug',
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
