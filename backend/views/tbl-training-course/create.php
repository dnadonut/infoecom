<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblTrainingCourse */

$this->title = 'เพิ่มข้อมูลการจัดอบรม';

?>
<div class="tbl-training-course-create">


    <?= $this->render('_form', [
        'model' => $model,
        'trainingplan' => $trainingplan,
    ]) ?>

</div>
