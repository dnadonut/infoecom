<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\ActiveField;
use kartik\widgets\DepDrop;
use frontend\models\TblMajors;
use frontend\models\TblTrainingCourse;
use frontend\models\TblLocations;
use frontend\models\TblTrainingPlans;

/* @var $this yii\web\View */
/* @var $model frontend\models\TblCandidates */
/* @var $form yii\widgets\ActiveForm */



//        $test =TblTrainingCourse::find()->joinWith(['tp'])->joinWith(['tp.locations'])->where(['major_id'=> 2])->andWhere(['tbl_locations.locations_id'=>2])->all();;
//
//foreach ($test as $key => $value) {
//    var_dump(ThaiDate($value['tp']['start_date']));
//        exit;  
//           $data[] = ['id' => $value['tp_id'], 'name' => $value['major_id']];
//           }
//    
?>

<div class="tbl-candidates-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <div class="form-group">
        <label class="control-label col-sm-3">หลักสูตร<font color="red"> *</font></label>
        <div class="col-sm-6">
            <?php
            echo $form->field($model, 'major', ['template' => '<div class=\"\">{input}</div><div class=\"\">{error}</div>'])->dropDownList(ArrayHelper::map(TblMajors::find()->all(), 'major_id', 'major_name')
                    , ['id' => 'ddl-major', 'prompt' => 'เลือกหลักสูตร'
            ]);
            ?>
        </div>  
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3">สถานที่อบรม<font color="red"> *</font></label>
        <div class="col-sm-6">
            <?php
            echo $form->field($model, 'location', ['template' => '<div class=\"\">{input}</div><div class=\"\">{error}</div>'])->widget(DepDrop::classname(), [
                'options' => ['id' => 'ddl-location'],
                'pluginOptions' => [
                    'depends' => ['ddl-major'],
                    'placeholder' => 'เลือกสถานที่อบรม',
                    'url' => Url::to(['/site/get-location'])
                ]
            ])->label('สถานที่');
            ?>
        </div>  
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3">วันที่อบรม<font color="red"> *</font></label>
        <div class="col-sm-6">
            <?=
            $form->field($model, 'training_id', ['template' => '<div class=\"\">{input}</div><div class=\"\">{error}</div>'])->widget(DepDrop::classname(), [
                'data' => [],
                'pluginOptions' => [
                    'depends' => ['ddl-major', 'ddl-location'],
                    'placeholder' => 'เลือกวันที่เข้าอบรม',
                    'url' => Url::to(['/site/get-date'])
                ]
            ]);
            ?>
        </div>  
    </div>


    <div class="form-group">
        <label class="control-label col-sm-3">คำนำหน้าชื่อ<font color="red"> *</font></label>
        <div class="col-sm-6">

            <label class="radio-inline">
                <input type="radio" name="prefix_name" onclick="SHFun(this.value)" value="นาย">นาย
            </label>
            <label class="radio-inline">
                <input type="radio" name="prefix_name" onclick="SHFun(this.value)" value="นาง">นาง
            </label>
            <label class="radio-inline">
                <input type="radio" name="prefix_name" onclick="SHFun(this.value)" value="นางสาว">นางสาว
            </label>
            <label class="radio-inline" >
                <input type="radio" name="prefix_name" onclick="SHFun(this.value)" value="1">อื่นๆ
            </label>
            <label class="radio-inline" style="margin-left:-15px;" >
                <input type="text" id="prefix" style="display:none; " onblur="input(this.value)" class="form-control"></input>
            </label>
        </div>  
    </div>

    <div style="display:none">
        <?= $form->field($model, 'prefix_name')->textInput(['maxlength' => true]) ?>
    </div>


    <div class="form-group">
        <label class="control-label col-sm-3">ชื่อ<font color="red"> *</font></label>
        <div class="col-sm-2">
            <?=
                    $form->field($model, 'fname', ['template' => '<div class=\"\">{input}</div><div class=\"\">{error}</div>'])
                    ->textInput()
            ?>

        </div> 
        <label class="control-label col-sm-1">นามสกุล<font color="red"> *</font></label>
        <div class="col-sm-3">
            <?=
                    $form->field($model, 'lname', ['template' => '<div class=\"\">{input}</div><div class=\"\">{error}</div>'])
                    ->textInput()
            ?>

        </div>   
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3">เบอร์โทร<font color="red"> *</font></label>
        <div class="col-sm-2">
            <?=
                    $form->field($model, 'telephone', ['template' => '<div class=\"\">{input}</div><div class=\"\">{error}</div>'])
                    ->textInput(['maxlength' => true])
            ?>

        </div> 
        <label class="control-label col-sm-1">อีเมล์<font color="red"> *</font></label>
        <div class="col-sm-3">
            <?=
                    $form->field($model, 'email', ['template' => '<div class=\"\">{input}</div><div class=\"\">{error}</div>'])
                    ->textInput()
            ?>

        </div>   
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3">การรับประทานอาหาร</label>
        <div class="col-sm-6">
            <div class="radio">
                <label><input type="radio" name="food_type" onclick="FTFun(this.value)" value="อาหารทั่วไป">อาหารทั่วไป</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="food_type" onclick="FTFun(this.value)" value="มังสวิรัติ">มังสวิรัติ</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="food_type" onclick="FTFun(this.value)" value="อาหารอิสลาม">อาหารอิสลาม</label>
            </div>
            <div class="radio-inline">
                <label><input type="radio" name="food_type" onclick="FTFun(this.value)" value="1">อื่นๆ</label>
            </div>
            <div class="radio-inline" style="margin-left:-15px;">
                <input type="text" id="food_type" style="display:none; " onblur="input_food(this.value)" class="form-control"></input>
            </div>
        </div> 
    </div>
    <div style="display:none">
        <?= $form->field($model, 'food_type')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-3">ประเภทผู้เข้าอบรม<font color="red"> *</font></label>
        <div class="col-sm-6">
            <div class="radio">
                <label><input type="radio" name="candidates_type" onclick="CTFun(this.value)" value="เป็นผู้สนใจเป็นผู้ประกอบการ SME">เป็นผู้สนใจเป็นผู้ประกอบการ SME</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="candidates_type" onclick="CTFun(this.value)" value="เป็นผู้ประกอบการ SME" >เป็นผู้ประกอบการ SME (กรุณากรอกข้อมูลชื่อสถานประกอบการ)</label>
            </div>
        </div> 
    </div>


    <div class="form-group" style="display:none; " id="div_candidates">
        <label class="control-label col-md-3">ชื่อสถานประกอบการ<font color="red">*</font></label>
        <div class="col-sm-4">
            <input type="text" id="candidates_type" onblur="input_candidates(this.value)" class="form-control"></input>
        </div>
    </div>


    <div style="display:none">
        <?= $form->field($model, 'candidates_type')->textInput(['maxlength' => true]) ?>
    </div>
    <div style="display:none">
        <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>
    </div>




    <div class="form-group" style="text-align: center;">
        <?= Html::submitButton($model->isNewRecord ? 'สมัคร' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-info' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <script type="text/javascript">
        function SHFun(obj) {

            if (obj == "1") {
                document.getElementById('prefix').style.display = "block";
                document.getElementById("tblcandidates-prefix_name").value = document.getElementById('prefix').value;

                return false;
            } else {
                document.getElementById("tblcandidates-prefix_name").value = obj;
                document.getElementById('prefix').style.display = "none";
                return false;
            }
        }

        function input(obj) {

            document.getElementById("tblcandidates-prefix_name").value = document.getElementById('prefix').value;

        }

        function FTFun(obj) {

            if (obj == "1") {
                document.getElementById('food_type').style.display = "block";
                document.getElementById("tblcandidates-food_type").value = document.getElementById('food_type').value;

                return false;
            } else {
                document.getElementById("tblcandidates-food_type").value = obj;
                document.getElementById('food_type').style.display = "none";
                return false;
            }
        }

        function input_food(obj) {

            document.getElementById("tblcandidates-food_type").value = document.getElementById('food_type').value;

        }

        function CTFun(obj) {

            if (obj == "เป็นผู้ประกอบการ SME") {
                document.getElementById('div_candidates').style.display = "block";
                document.getElementById("tblcandidates-candidates_type").value = obj;
                return false;
            } else {
                document.getElementById("tblcandidates-candidates_type").value = obj;
                document.getElementById('div_candidates').style.display = "none";
                document.getElementById("tblcandidates-company").value = null;
                return false;
            }
        }

        function input_candidates(obj) {
            document.getElementById("tblcandidates-company").value = document.getElementById('candidates_type').value;
        }
    </script>
</div>

