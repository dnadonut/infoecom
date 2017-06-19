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
        <img src="<?=$baseUrl?>/images/poster/poster4.gif" alt="">
        <div style="text-align: center;">
            <h1>หลักสูตร “กลยุทธ์การขายสินค้าออนไลน์ให้ประสบความสำเร็จ”</h1>
            <h2>“เรียนฟรี มีต้นแบบ (prototype)ไปทำธุรกิจ online”</h2>
        </div>
        <br>
        <div class="about-right-boot">
            <div class="about-right-wrapper">
                <h3><b>หัวข้อการฝึกอบรม</b></h3> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;การขายสินค้าออนไลน์ให้ประสบความสำเร็จควรทำอย่างไร</font></div>
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;กรณีศึกษา:วิเคราะห์รูปแบบของการขายสินค้าออนไลน์ที่ประสบความสำเร็จทั้งของไทยและต่างประเทศ</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;เทคนิคการวิเคราะห์ข้อมูลการใช้บริการเว็บไซต์ของลูกค้า</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;การโปรโมทเว็บไซต์ให้ตรงกลุ่มเป้าหมาย (Targeted Promotion)</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;เทคนิคการใช้ Social Media (FaceBook) เพื่อสร้างและมัดใจลูกค้า</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;เทคนิคการใช้ Social Media (Line) เพื่อสร้างและมัดใจลูกค้า</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;เทคนิคการใช้ Social Media (Google) เพื่อสร้างและมัดใจลูกค้า</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;เทคนิคการใช้ Social Media (YouTube, Instragram , etc.) เพื่อสร้างและมัดใจลูกค้า</font></div> 
                <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                    <font style="font-size:24px;">&nbsp;รูปแบบการสร้างความจงรักภักดีให้กับธุรกิจออนไลน์ (e-Loyalty Marketing)</font></div> 
            </div>
        </div>



    </div>
</div>

