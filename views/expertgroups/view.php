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

    <h1><?= Html::encode($this->title) ?></h1>

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
                'label' => 'Еxperts',
                'format' => 'html',
                'value' => ListView::widget([
                    'dataProvider' => (new ArrayDataProvider([
                        'allModels' => $model->experts
                    ]))
                ])
            ],
            [
                'label' => Yii::t('app','Display color'),
                'format' => 'raw',
                'value' => '<div class="label" style="background-color:'.$model->display_color.';">'.$model->name.'</div>'
            ]
        ],
    ]) ?>

</div>
