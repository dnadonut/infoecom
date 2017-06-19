<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblTrainingCourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'การจัดอบรม';
?>
<div class="tbl-training-course-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มการจัดอบรม', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'major_id',
                'label' => 'ชื่อหลักสูตร',
                'value' => 'major.major_name',
                'contentOptions' => ['style' => 'width: 25%; text-align: center;'],
                'headerOptions' => ['style' => 'text-align:center'],
            ],
            [
                'attribute' => 'major_id',
                'label' => 'สถานที่จัด',
                'value' => 'tp.locations.location_name',
                'contentOptions' => ['style' => 'width: 25%; text-align: center;'],
                'headerOptions' => ['style' => 'text-align:center'],
            ],
            
            [
                'attribute' => 'tp_id',
                'label' => 'วันที่เริ่มจัด',
                'value' => 'tp.start_date',
                'contentOptions' => ['style' => 'width: 25%; text-align: center;'],
                'headerOptions' => ['style' => 'text-align:center'],
            ],
            [
                'attribute' => 'tp_id',
                'label' => 'วันที่สิ้นสุด',
                'value' => 'tp.start_date',
                'contentOptions' => ['style' => 'width: 25%; text-align: center;'],
                'headerOptions' => ['style' => 'text-align:center'],
            ],
            
       
            'candidates_limits',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
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