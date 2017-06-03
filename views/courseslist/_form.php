<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\CoursesList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courses-list-form">

    <?php $form = ActiveForm::begin(Yii::$app->controller->module->formsConfig); ?>

    <?= $form->field($model, 'course_id')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'list' => 'List', 'reserve' => 'Reserve', 'reject' => 'Reject', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'date_from')->textInput() ?>

    <?= $form->field($model, 'date_to')->textInput() ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
