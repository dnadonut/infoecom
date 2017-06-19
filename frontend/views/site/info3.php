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
        <img src="<?=$baseUrl?>/images/poster/poster3.gif" alt="">
        <div style="text-align: center;">
                <h1>หลักสูตร “การออกแบบเว็บไซท์เพื่อขายสินค้าออนไลน์”</h1>

                <h2>“เรียนฟรี มีต้นแบบ (prototype)ไปทำธุรกิจ online”</h2>
            </div>
               <br>
            <div class="about-right-boot">
                <div class="about-right-wrapper">
                    <h3><b>หัวข้อการฝึกอบรม</b></h3> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;การสร้างเว็บไซต์ที่ดี (Content)</font></div>
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;โครงสร้างเว็บไซต์ที่ดี (Structure)</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;เทคนิคการเลือก โฮสติ้ง และโดเมนเนม</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;ระบบการชำระเงิน การขนส่ง</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;รูปแบบและการเลือกใช้ร้านค้าออนไลน์</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;การสร้างความน่าเชื่อถือให้กับเว็บไซต์ (Targeting)</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;กฎ ระเบียบที่ เกี่ยวข้องกับธุรกิจออนไลน์</font></div>
                                    
                </div>
            </div>

       
    </div>
</div>


