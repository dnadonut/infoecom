<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TblCandidates */

$this->title = $model->candidates_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Candidates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-candidates-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'candidates_id' => $model->candidates_id, 'training_id' => $model->training_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'candidates_id' => $model->candidates_id, 'training_id' => $model->training_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'candidates_id',
            'training_id',
            'prefix_name',
            'fname',
            'lname',
            'telephone',
            'email:email',
            'food_type',
            'candidates_type',
        ],
    ]) ?>

</div>
