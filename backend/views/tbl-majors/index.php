<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblMajorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'หลักสูตร';
?>
<div class="tbl-majors-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มหลักสูตร', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'major_id',
            'major_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
