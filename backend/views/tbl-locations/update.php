<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblLocations */

$this->title = 'แก้ไขสถานที่: ' . $model->location_name;
?>
<div class="tbl-locations-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
