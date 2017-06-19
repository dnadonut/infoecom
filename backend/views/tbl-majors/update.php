<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblMajors */

$this->title = 'แก้ไขหลักสูตร: ' . $model->major_name;

?>
<div class="tbl-majors-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
