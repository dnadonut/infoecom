<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\TblTrainingPlans;
use backend\models\TblLocations;

$training_plan = TblTrainingPlans::find()->where(['tp_id' => $model->tp_id])->one();

$location = TblLocations::find()->where(['locations_id' => $training_plan->locations_id])->one();


/* @var $this yii\web\View */
/* @var $model backend\models\TblTrainingCourse */

$this->title = $model->major->major_name . '(' . $location->location_name . ') ' . ThaiDate($training_plan->start_date) . ' - ' . ThaiDate($training_plan->end_date);
?>
<div class="tbl-training-course-view">


    <p>
        <?= Html::a('แก้ไข', ['update', 'training_id' => $model->training_id, 'major_id' => $model->major_id, 'tp_id' => $model->tp_id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('ลบ', ['delete', 'training_id' => $model->training_id, 'major_id' => $model->major_id, 'tp_id' => $model->tp_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'คุณแน่ใจว่าต้องการลบใช่หรือไม่',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'training_id',
            [
                'attribute' => 'major_id',
                'label' => 'หลักสูตร',
                'value' => $model->major->major_name,
                'displayOnly' => true,
            ],
            [
                'label' => 'สถานที่จัด',
                'value' => $location->location_name,
                'displayOnly' => true,
            ],
            [
                'label' => 'วันที่เริ่มจัด',
                'value' => ThaiDate($training_plan->start_date),
                'displayOnly' => true,
            ],
            [
                'label' => 'วันที่สิ้นสุด',
                'value' => ThaiDate($training_plan->end_date),
                'displayOnly' => true,
            ],
            [
                'attribute' => 'candidates_limits',
                'value' => $model->candidates_limits . ' คน',
                'displayOnly' => true,
            ],
        ],
    ])
    ?>

</div>

<?php

function ThaiDate($day) {
    if ($day == null) {
        return "ไม่มี";
    }
    $listday = explode("-", $day);

//$ThDay = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์" );
    $ThMonth = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน",
        "พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม",
        "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");

//$a = date( "w" );	// ค่าวันในสัปดาห์ (0-6)
    $b = $listday[1] - 1; // ค่าเดือน (1-12)
    $c = $listday[2]; // ค่าวันที่(1-31)
    $d = $listday[0] + 543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.

    return "$c $ThMonth[$b] พ.ศ. $d";
}
?>