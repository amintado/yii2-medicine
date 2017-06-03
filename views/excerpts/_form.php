<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Excerpts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="excerpts-form">

    <?php $form = ActiveForm::begin(Yii::$app->controller->module->formsConfig); ?>

    <?= $form->field($model, 'course_id')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
