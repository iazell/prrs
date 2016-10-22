<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Records */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="records-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'complainantName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complainantAddress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'complainantContact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complainantAge')->textInput() ?>

    <?= $form->field($model, 'complainantGender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'accusedName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accusedAddress')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'accusedContact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accusedAge')->textInput() ?>

    <?= $form->field($model, 'accusedGender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'eventNmber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture')->textInput() ?>

    <?= $form->field($model, 'subject')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'natureOfCrime')->dropDownList([ 'Murder' => 'Murder', 'Theft' => 'Theft', 'Rape' => 'Rape', 'Kidnapping' => 'Kidnapping', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'dateCommited')->textInput() ?>

    <?= $form->field($model, 'placeCommited')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'apprehendingOffier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateRecoreded')->textInput() ?>

    <?= $form->field($model, 'reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
