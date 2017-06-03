<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\ScheduleTemplates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-templates-form">

    <?php $form = ActiveForm::begin(Yii::$app->controller->module->formsConfig); ?>

    <?= $form->field($model, 'expert_id')->textInput() ?>

    <?= $form->field($model, 'expert_group_id')->textInput() ?>

    <?= $form->field($model, 'place_id')->textInput() ?>

    <?= $form->field($model, 'week_day')->textInput() ?>

    <?= $form->field($model, 'time_from')->textInput() ?>

    <?= $form->field($model, 'time_to')->textInput() ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
