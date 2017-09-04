<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use ut8ia\medicine\widgets\patientSearch\PatientSearchWidget;
use ut8ia\medicine\models\Courses;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\forms\ExcerptsForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="excerpts-form">

    <?php $form = ActiveForm::begin(Yii::$app->controller->module->formsConfig); ?>

    <?= $form->field($model, 'course_id')->dropDownList(
        Yii::$app->formatter->asPairs(
            Courses::class,
            ['status' => [Courses::STATUS_OPEN, Courses::STATUS_PENDING]],
            'id',
            ['view' => 'selector'])
    );
    ?>

    <?= PatientSearchWidget::widget([
        'model' => $model,
        'form' => $form
    ])
    ?>

    <?= $form->field($model, 'date')->widget(DatePicker::class, [
        'type' => DatePicker::TYPE_INPUT,
        'pluginOptions' => [
            'format' => Yii::$app->time->dateJsFormat
        ]
    ]) ?>

    <?= $form->field($model, 'text')->textarea(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
