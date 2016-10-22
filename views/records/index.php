<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel app\models\RecordsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="records-index">

        <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<p>
        <?= Html::button('Criminal Report Form', ['value'=>Url::to('index.php?r=records/create'), 'class' => 'btn btn-success', 'id'=>'modalButton']) ?>
    </p>

       <?php
        Modal::begin([
            //'header'=>'<h4>Create Users</h4>',
            'id' => 'modal',
            'size' => 'modal-lg',
        ]);

        echo "<div id='modalContent'></div>";
        
        Modal::end();
    ?>  


    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'complainantName',
            //'complainantAddress:ntext',
           // 'complainantContact',
           // 'email:email',
           // 'complainantAge',
            // 'complainantGender',
             'accusedName',
            // 'accusedAddress:ntext',
            // 'accusedContact',
            // 'accusedAge',
            // 'accusedGender',
            // 'eventNmber',
            // 'picture',
            // 'subject:ntext',
             'natureOfCrime',
            // 'dateCommited',
            // 'placeCommited:ntext',
            // 'apprehendingOffier',
            // 'dateRecoreded',
            // 'reason:ntext',
            // 'id',
             'Status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
