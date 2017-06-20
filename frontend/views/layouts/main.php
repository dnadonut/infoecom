<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
//use common\widgets\Alert;

AppAsset::register($this);
$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;
$this->title = 'WU-ECOMMERCE';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="top" data-spy="scroll">
<?php $this->beginBody() ?>
    <header id="home">

        <section class="top-nav hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-left">

                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/%E0%B9%82%E0%B8%84%E0%B8%A3%E0%B8%87%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9A%E0%B8%B9%E0%B8%A3%E0%B8%93%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%A8%E0%B8%A3%E0%B8%A9%E0%B8%90%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%94%E0%B8%B4%E0%B8%88%E0%B8%B4%E0%B8%97%E0%B8%B1%E0%B8%A5-1728699500764010/">
                                        <i class="fa fa-facebook-square" style="font-size:24px;color:#4267b2"></i> อบรมฟรี 5 หลักสูตร (ภาคใต้)
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="top-right">
                            <p>มหาวิทยาลัยวลัยลักษณ์</span></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--main-nav-->

        <div id="main-nav">

            <nav class="navbar">
                <div style="margin-left: 5%;"

                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand">WU-ECOMMERCE</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
                            <span class="sr-only">Toggle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse" id="ftheme">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">หน้าหลัก</a></li>
                            <li><a href="#info1">กลยุทธ์การสร้างแบรนด์</a></li>
                            <li><a href="#info2">การออกแบบผลิตภัณฑ์และบรรจุภัณฑ์</a></li>
                            <li><a href="#info3">สร้างเว็บขายสินค้า</a></li>
                            <li><a href="#info4">กลยุทธ์การขายสินค้าออนไลน์</a></li>
                            <li><a href="#info5">พัฒนาต้นแบบด้วยเครื่องพิมพ์ 3 มิติ</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    
    <img src="<?=$baseUrl?>/images/banner/banner.jpg" width="100%" >
        <!--info1-->
        <div id="info1">
                <div class="row">

                        <div class="portfolio-heading">
                            <h2>หลักสูตรการสร้างแบรนด์ในยุคดิจิทัล</h2> 
                        </div>

                </div>      

            <div class="portfolio-thumbnail">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="item">
                                <img src="<?=$baseUrl?>/images/poster/poster1.gif" alt="">
                                <div class="caption" >
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>ดูรายละเอียด</p>
                                    <?= Html::a('', ['info1'], ['class' => 'hyperspan']) ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <!--info2-->
        <div id="info2">
                <div class="row">
                        <div class="portfolio-heading">
                            <h2>หลักสูตรการออกแบบผลิตภัณฑ์และบรรจุภัณฑ์สำหรับธุรกิจออนไลน์</h2> 
                        </div>
                </div>      

            <div class="portfolio-thumbnail">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="item">
                                <img src="<?=$baseUrl?>/images/poster/poster2.gif" alt="">
                                
                                <div class="caption" >
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>ดูรายละเอียด</p>
                                    <?= Html::a('', ['info2'], ['class' => 'hyperspan']) ?>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>

        <!--info3-->
        <div id="info3">
                <div class="row">
                        <div class="portfolio-heading">
                            <h2>หลักสูตรการออกแบบเว็บไซต์เพื่อขายสินค้าออนไลน์</h2> 
                        </div>
                </div>      

            <div class="portfolio-thumbnail">
                <div class="container-fluid">
                    <div class="row">
                            <div class="item">
                                <img src="<?=$baseUrl?>/images/poster/poster3.gif" alt="">
                                <div class="caption" >
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>ดูรายละเอียด</p>
                                    <?= Html::a('', ['info3'], ['class' => 'hyperspan']) ?>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <!--info4-->
        <div id="info4">
                <div class="row">
                        <div class="portfolio-heading">
                            <h2>หลักสูตรกลยุทธ์การขายสินค้าออนไลน์ให้ประสบความสำเร็จ</h2> 
                        </div>
                </div>      

            <div class="portfolio-thumbnail">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="item">
                                <img src="<?=$baseUrl?>/images/poster/poster4.gif" alt="">
                                <div class="caption" >
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>ดูรายละเอียด</p>
                                    <?= Html::a('', ['info4'], ['class' => 'hyperspan']) ?>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>

        <!--info5-->
        <div id="info5">
                <div class="row">
                        <div class="portfolio-heading">
                            <h2>หลักสูตรการพัฒนาผลิตภัณฑ์ต้นแบบโดยใช้เทคโนโลยีการพิมพ์ 3 มิติ</h2> 
                        </div>
                </div>      

            <div class="portfolio-thumbnail">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="item">
                                <img src="<?=$baseUrl?>/images/poster/poster5.gif" alt="">
                                <div class="caption" >
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <p>ดูรายละเอียด</p>
                                    <?= Html::a('', ['info5'], ['class' => 'hyperspan']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       


        <!--footer-->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-heading">
                            <h3>เกี่ยวกับเรา</h3>
                            <p>สำนักวิชาสารสนเทศศาสตร์ และมหาวิทยาลัยวลัยลักษณ์ จัดอบรมฟรี 5 หลักสูตร </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-heading">
                            <h3>ข่าวล่าสุด</h3>
                            <ul>
                                <li><a href="#">ยังไม่มีข่าว</a></li>
                                <li><a href="#">ยังไม่มีข่าว</a></li>
                                <li><a href="#">ยังไม่มีข่าว</a></li>
                                <li><a href="#">ยังไม่มีข่าว</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-heading">
                            <h3>ติดต่อเรา</h3>
                            <p>สำนักวิชาสารสนเทศศาสตร์ มหาวิทยาลัยวลัยลักษณ์</p>
                            <p>Tel. 075-672206, 672204</p>
                            <p>Fax. 075-672205</p>
                            <p><a href="http://informatics.wu.ac.th/">http://informatics.wu.ac.th/</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--bottom footer-->
        <div id="bottom-footer" class="hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-left">
                            มหาวิทยาลับวลัยลักษณ์
                            <div class="credits">
                                
                                สำนักวิชาสารสนเทศศาสตร์
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="footer-right" style="text-align: right;">
                            สนับสนุนโดยกระทรวง ICT
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
