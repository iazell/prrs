<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Clearances */

$this->title = 'Police Clearance Form';
$this->params['breadcrumbs'][] = ['label' => 'Clearances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clearances-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
