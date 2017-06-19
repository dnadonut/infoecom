<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblCandidates */

$this->title = 'Update Tbl Candidates: ' . $model->candidates_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Candidates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->candidates_id, 'url' => ['view', 'candidates_id' => $model->candidates_id, 'training_id' => $model->training_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-candidates-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
