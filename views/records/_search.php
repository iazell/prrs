<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RecordsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="records-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'complainantName') ?>

    <?= $form->field($model, 'complainantAddress') ?>

    <?= $form->field($model, 'complainantContact') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'complainantAge') ?>

    <?php // echo $form->field($model, 'complainantGender') ?>

    <?php // echo $form->field($model, 'accusedName') ?>

    <?php // echo $form->field($model, 'accusedAddress') ?>

    <?php // echo $form->field($model, 'accusedContact') ?>

    <?php // echo $form->field($model, 'accusedAge') ?>

    <?php // echo $form->field($model, 'accusedGender') ?>

    <?php // echo $form->field($model, 'eventNmber') ?>

    <?php // echo $form->field($model, 'picture') ?>

    <?php // echo $form->field($model, 'subject') ?>

    <?php // echo $form->field($model, 'natureOfCrime') ?>

    <?php // echo $form->field($model, 'dateCommited') ?>

    <?php // echo $form->field($model, 'placeCommited') ?>

    <?php // echo $form->field($model, 'apprehendingOffier') ?>

    <?php // echo $form->field($model, 'dateRecoreded') ?>

    <?php // echo $form->field($model, 'reason') ?>

    <?php // echo $form->field($model, 'id') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
