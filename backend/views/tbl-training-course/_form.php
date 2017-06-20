<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\ActiveField;
use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\TblTrainingCourse */
/* @var $form yii\widgets\ActiveForm */
//var_dump($trainingplan);
//exit();
use backend\models\TblMajors;
use backend\models\TblLocations;



?>

<div class="tbl-training-course-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col-sm-3">หลักสูตร<font color="red">*</font></label>
        <div class="col-sm-3">
            <?php
            echo $form->field($model, 'major_id',
                    ['template' => '<div class=\"\">{input}</div><div class=\"\">{error}</div>'])
                    ->dropDownList(ArrayHelper::map(TblMajors::find()
                                    ->orderBy(['major_name' => SORT_ASC])
                                    ->asArray()->all()
                                    , 'major_id', 'major_name')
                    )
            ?>
            
        </div>   
    </div>
    
    
    <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col-sm-3">สถานที่จัด<font color="red">*</font></label>
        <div class="col-sm-3">
            <?php
            echo $form->field($model, 'locations',
                    ['template' => '<div class=\"\">{input}</div><div class=\"\">{error}</div>'])
                    ->dropDownList(ArrayHelper::map(TblLocations::find()
                                    ->orderBy(['location_name' => SORT_ASC])
                                    ->asArray()->all()
                                    , 'locations_id', 'location_name')
                    )
            ?>
            
        </div>   
    </div>


   

    <div class="form-group" style="margin-bottom: 25px">
        <label class="control-label col-sm-3">วันที่จัดอบรม<font color="red">*</font></label>
        <div class="col-sm-2" style="padding-left: 0px; padding-right: 0px;">
            <?=
            DatePicker::widget([
                'model' => $trainingplan,
                'attribute' => 'start_date',
                'attribute2' => 'end_date',
                'options' => ['placeholder' => 'วันที่เริ่มจัด'],
                'options2' => ['placeholder' => 'วันที่สิ้นสุด'],
                'type' => DatePicker::TYPE_RANGE,
                'language' => 'th',
                'separator'=>'ถึง',
                'form' => $form,
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'autoclose' => true,
                    'startDate'=>'d',
                ]
            ]);
            ?>
        </div>
    </div>
    
    <div class="form-group" style="margin-bottom: 0px">
        <label class="control-label col-sm-3">จำนวนที่รับ<font color="red">*</font></label>
        <div class="col-sm-1">
            <?=
            $form->field($model, 'candidates_limits',
                    ['template' => '<div class=\"\">{input}</div><div class=\"\">{error}</div>'])
                    ->textInput(['type' => 'number'])
            ?>
            
        </div>
    </div>


    <div class="form-group" style="text-align: center;">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่ม' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
