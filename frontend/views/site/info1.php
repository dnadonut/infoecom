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
        <img src="<?=$baseUrl?>/images/poster/poster1.gif" alt="">
        <div style="text-align: center;">
                <h1>หลักสูตร “การสร้างแบรนด์ในยุคดิจิทัล”</h1>
                <h2>“เรียนฟรี มีต้นแบบ (prototype)ไปทำธุรกิจ online”</h2>
            </div>
        <br>
            <div class="about-right-boot">
                <div class="about-right-wrapper">
                    <h3><b>หัวข้อการฝึกอบรม</b></h3> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;แบรนด์คืออะไร ?</font></div>
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;ทำไมต้องสร้างแบรนด์ ?</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;ทําอย่างไรแบรนด์ของเราถึงจะได้เป็นที่หนึ่งในใจของกลุ่มเป้าหมาย?</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;ขั้นตอนการวางจุดยืนของตราสินค้าที่แข็งแรงและยั่งยืน</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;การแบ่งกลุ่มลูกค้าเป้าหมาย (Segmentation)</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;การเลือกกลุ่มลูกค้าเป้าหมาย (Targeting)</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;จุดยืนของแบรนด์ (Positioning)</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;การสร้างช่องทางการขายหลักสำหรับธุรกิจที่สอดคล้องกับ STP</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;วิธีการ และการประยุกต์ใช้สื่อออนไลน์ในการสร้างแบรนด์</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;ตัวอย่างและกรณีศึกษาความสำเร็จของธุรกิจ on-line จากแบรนด์</font></div> 
                    <div><i class="glyphicon glyphicon-hand-right" style="font-size:24px;color:#4267b2"></i> 
                        <font style="font-size:24px;">&nbsp;ฝึกปฏิบัติ</font></div> 
                                    
                </div>
            </div>
        
         

<!--            <div class="about-right-best">
                <div class="about-right-wrapper">
                    <h3>Best Business Statitics</h3>
                    <p>Michael Knight a young loner on a crusa champion the cause of the innocent. The helpless. powerless in a world of operate above the law.</p>
                </div>
            </div>

            <div class="about-right-support">
                <div class="about-right-wrapper">
                    <h3>24/7 Online Support</h3>
                    <p>Michael Knight a young loner on a crusa champion the cause of the innocent. The helpless. powerless in a world of operate above the law.</p>
                </div>
            </div>-->

       
    </div>
</div>


