<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClearancesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clearances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clearances-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Clearances', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'address',
            'birthplace',
            'birthdate',
            // 'citizenship',
            // 'civilstatus',
            // 'purpose',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
