<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use yii\jui\AutoComplete;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\CoursesList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courses-list-form">

    <?php $form = ActiveForm::begin(Yii::$app->controller->module->formsConfig); ?>

    <?= $form->field($model, 'course_id')->hiddenInput()->label(false); ?>

    <?= $form->field($model, 'patient_id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'patient_name')->widget(AutoComplete::class, [
        'clientOptions' => [
            'source' => new JsExpression('function (request,response){ window.clientSearch.requestAutocomplete(request, response); }'),
            'delay' => 700,
            'select' => new JsExpression('function (a,b){ window.clientSearch.selectItemSafe(a, b); }'),
        ],
        'options' => [
            'readonly' => false,
            'value' => $model->patient_name,
            'class' => 'form-control',
            'placeholder' => Yii::t('app', 'Search or add contact client'),
        ],
    ]) ?>

    <?= $form->field($model, 'status')->dropDownList($model->getStatuses()) ?>

    <?= $form->field($model, 'date_from')->Widget(DatePicker::class, [
        'type' => DatePicker::TYPE_INPUT,
        'pluginOptions' => [
            'format' => Yii::$app->time->dateJsFormat
        ]
    ]) ?>

    <?= $form->field($model, 'date_to')->Widget(DatePicker::class, [
        'type' => DatePicker::TYPE_INPUT,
        'pluginOptions' => [
            'format' => Yii::$app->time->dateJsFormat
        ]
    ]) ?>

    <?= $form->field($model, 'comment')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
