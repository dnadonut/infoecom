<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblCandidatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Candidates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-candidates-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Candidates', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'candidates_id',
//            'training_id',
            'prefix_name',
            'fname',
            'lname',
            'telephone',
            'email:email',
            'food_type',
            'candidates_type',
        ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
