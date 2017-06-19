<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
//use common\widgets\Alert;

AppAsset::register($this);
$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;

?>
<div class="row">

    <div class="col-xs-12 col-md-12">
        <img src="<?=$baseUrl?>/images/poster/poster5.gif" alt="">
        <div style="text-align: center;">
            <h1>หลักสูตร “การพัฒนาผลิตภัณฑ์ต้นแบบโดยใช้เทคโนโลยีการพิมพ์ 3 มิติ”</h1>
            <h2>“เรียนฟรี มีต้นแบบ (prototype)ไปทำธุรกิจ online”</h2>
        </div>
        <br>
        <div class="about-right-boot">
            <div class="about-right-wrapper">
                <h3><b>หัวข้อการฝึกอบรม</b></h3> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;ความรู้พื้นฐานเกี่ยวกับเทคโนโลยีการพิมพ์ 3 มิติ</font></div>
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;แนวโน้มเกี่ยวกับเทคโนโลยีการพิมพ์ 3 มิติ</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;ฮาร์ดแวร์และซอฟต์แวร์ที่เหมาะสมสำหรับการพิมพ์ 3 มิติ</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;วัสดุที่ใช้สำหรับพิมพ์ 3 มิติ</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;การเพิ่มมูลค่าผลิตภัณฑ์ด้วยเทคโนโลยีการพิมพ์ 3 มิติ</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;กรณีศึกษา: การใช้เทคโนโลยีการพิมพ์ 3 มิติในงานสร้างสรรค์</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;กรณีศึกษา: การใช้เทคโนโลยีการพิมพ์ 3 มิติในงานด้านการแพทย์</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;กรณีศึกษา: การใช้เทคโนโลยีการพิมพ์ 3 มิติในงานบรรจุภัณฑ์</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;กรณีศึกษา: การใช้เทคโนโลยีการพิมพ์ 3 มิติในงานด้านศิลปะ</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;ฝึกปฏิบัติ</font></div> 

            </div>
        </div>



    </div>
</div>

