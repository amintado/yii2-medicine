<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\search\MeetsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meets-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'expert_id') ?>

    <?= $form->field($model, 'expert_group_id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'place_id') ?>

    <?php // echo $form->field($model, 'course_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'meet_type_id') ?>

    <?php // echo $form->field($model, 'for_excerpt') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'time_from') ?>

    <?php // echo $form->field($model, 'time_to') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
