<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use ut8ia\filemanager\widgets\TinyMCE;
use kartik\widgets\Select2;

use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model ut8ia\medicine\models\Experts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="experts-form">

    <?php $form = ActiveForm::begin(Yii::$app->controller->module->formsConfig); ?>


    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_info')->widget(TinyMce::class) ?>

    <?= $form->field($model, 'info')->widget(TinyMce::class) ?>

    <?= $form->field($model, 'images')->widget(TinyMce::class) ?>

    <hr>

    <?= $form->field($model, 'places')->widget(Select2::class, [
        'data' => $availablePlaces,
        'language' => 'en',
        'options' => [
            'multiple' => true,
            'placeholder' => 'Tags for navigation'
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'expertGroups')->widget(Select2::class, [
        'data' => $availableExpertGroups,
        'language' => 'en',
        'options' => [
            'multiple' => true,
            'placeholder' => 'Tags for navigation'
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <hr>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList($model->getStatuses()) ?>

    <?= $form->field($model, 'newPassword')->textInput(['maxlength' => true]) ?>

    <hr>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
