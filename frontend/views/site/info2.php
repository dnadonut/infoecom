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


    <!--about wrapper right-->
    <div class="col-xs-12 col-md-12">
        <img src="<?=$baseUrl?>/images/poster/poster2.gif" alt="">
        <div style="text-align: center;">
            <h1>หลักสูตร “การออกแบบผลิตภัณฑ์และบรรจุภัณฑ์สำหรับธุรกิจออนไลน์”</h1>
            <h2>“เรียนฟรี มีต้นแบบ (prototype)ไปทำธุรกิจ online”</h2>
        </div>
        <br>
        <div class="about-right-boot">
            <div class="about-right-wrapper">
                <h3><b>หัวข้อการฝึกอบรม</b></h3> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;บรรจุภัณฑ์มีผลอย่างไรต่อตัวสินค้าและภาพลักษณ์ขององค์กร</font></div>
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;การเพิ่มมูลค่าทางการตลาดด้วยบรรจุภัณฑ์</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;การออกแบบบรรจุภัณฑ์ที่เหมาะกับตัวสินค้า</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;หลักการและศิลปะการออกแบบบรรจุภัณฑ์</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;การออกแบบ บรรจุภัณฑ์ภายใน ( Inner Packaging )</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;การออกแบบ บรรจุภัณฑ์ภายนอก ( Outer Packaging )</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;ระบบการผลิตบรรจุภัณฑ์  (ฉลาก ข้อความ ตัวอักษร รูปภาพประกอบ)</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;การเลือกวัสดุสำหรับงานบรรจุภัณฑ์</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;ออกแบบบรรจุภัณฑ์อย่างไรให้ถูกใจผู้บริโภค</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;ฝึกปฏิบัติ</font></div> 

            </div>
        </div>



    </div>
</div>


