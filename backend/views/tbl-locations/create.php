<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblLocations */

$this->title = 'เพิ่มสถานที่';

?>
<div class="tbl-locations-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
