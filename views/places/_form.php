<?php

use ut8ia\medicine\models\Buildings;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\widgets\DepDrop;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Places */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="places-form">

    <?php $form = ActiveForm::begin(Yii::$app->controller->module->formsConfig); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'building_id')->dropDownList(
            Yii::$app->formatter->asPairs(Buildings::class)
    ) ?>

    <?= $form->field($model, 'floor')->widget(DepDrop::class, [
        'options' => ['id' => 'placesform-floor'],
        'data' => $model->buildings->findFloors(),
        'pluginOptions' => [
            'depends' => ['placesform-building_id'],
            'placeholder' => 'Select...',
            'url' => Url::to(['buildings/floors'])
        ]
    ]);

    ?>

    <?= $form->field($model, 'description')->textarea(); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
