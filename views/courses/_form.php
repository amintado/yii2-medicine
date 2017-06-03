<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Courses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courses-form">

    <?php $form = ActiveForm::begin(Yii::$app->controller->module->formsConfig); ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'date_start')->textInput() ?>

    <?= $form->field($model, 'date_end')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'open' => 'Open', 'closed' => 'Closed', 'ended' => 'Ended', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
