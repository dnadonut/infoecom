<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblLocationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สถานที่จัด';
?>
<div class="tbl-locations-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มสถานที่', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'locations_id',
            'location_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
