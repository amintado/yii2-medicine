<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Meets */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meets-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'expert_id')->textInput() ?>

    <?= $form->field($model, 'expert_group_id')->textInput() ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'place_id')->textInput() ?>

    <?= $form->field($model, 'course_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'planned' => 'Planned', 'done' => 'Done', 'rejected' => 'Rejected', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'meet_type_id')->textInput() ?>

    <?= $form->field($model, 'for excerpt')->textInput() ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_from')->textInput() ?>

    <?= $form->field($model, 'time_to')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
