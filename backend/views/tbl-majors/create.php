<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblMajors */

$this->title = 'เพิ่มหลักสูตร';

?>
<div class="tbl-majors-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
