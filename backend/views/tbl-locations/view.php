<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TblLocations */

$this->title = $model->location_name;
?>
<div class="tbl-locations-view">
    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'locations_id',
            'location_name',
        ],
    ])
    ?>
    <p align='center'>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->locations_id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('ลบ', ['delete', 'id' => $model->locations_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'คุณแน่ใจว่าต้องการลบใช่หรือไม่',
                'method' => 'post',
            ],
        ])
        ?>
    </p>
</div>
