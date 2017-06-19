<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblTrainingCourse */

$this->title = 'แก้ไขการจีดอบรม: ' . $model->training_id;
?>
<div class="tbl-training-course-update">


    <?= $this->render('_form', [
        'model' => $model,
        'trainingplan' => $trainingplan,
    ]) ?>

</div>
