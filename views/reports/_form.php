<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Records;

/* @var $this yii\web\View */
/* @var $model app\models\Reports */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reports-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'recordid')->dropDownList(
            ArrayHelper::map(Records::find()->all(),'id', 'accusedName'),
            ['prompt'=>'Choose a Record to Report']
    ) ?>

    <?= $form->field($model, 'detailOfEvent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actionTaken')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'summary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Solved' => 'Solved', 'Pending' => 'Pending', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
