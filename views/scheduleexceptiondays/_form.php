<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\ScheduleExceptionDays */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="schedule-exception-days-form">

    <?php $form = ActiveForm::begin(Yii::$app->controller->module->formsConfig); ?>

    <?= $form->field($model, 'date')->Widget(DatePicker::class, [
        'type' => DatePicker::TYPE_INPUT,
        'pluginOptions' => [
            'format' => Yii::$app->time->dateJsFormat
        ]
    ])
    ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
