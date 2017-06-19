<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblCandidates */

$this->title = 'Create Tbl Candidates';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Candidates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-candidates-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
