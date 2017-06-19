<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TblMajors */

$this->title = 'หลักสูตร '.$model->major_name;
?>
<div class="tbl-majors-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'major_id',
            'major_name',
        ],
    ]) ?>
    
  <p align='center'>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->major_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->major_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'คุณแน่ใจว่าต้องการลบใช่หรือไม่',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
