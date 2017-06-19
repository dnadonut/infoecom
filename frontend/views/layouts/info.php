<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Button;
use yii\bootstrap\Modal;
use frontend\assets\AppAsset;

AppAsset::register($this);
$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;

$this->title = 'WU-ECOMMERCE';
$id = Yii::$app->requestedAction->id;


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
                                        <a href="#">
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
                                <li><a href="index.php">หน้าหลัก</a></li>

                                <li <?php if ($id == 'info1') { ?>class="active"<?php } ?>>
                                    <?= Html::a('กลยุทธ์การสร้างแบรนด์', ['info1']) ?>
                                </li>
                                <li <?php if ($id == 'info2') { ?>class="active"<?php } ?>>
                                    <?= Html::a('การออกแบบผลิตภัณฑ์และบรรจุภัณฑ์', ['info2']) ?>
                                </li>
                                <li <?php if ($id == 'info3') { ?>class="active"<?php } ?>>
                                    <?= Html::a('สร้างเว็บขายสินค้า', ['info3']) ?>
                                </li>
                                <li <?php if ($id == 'info4') { ?>class="active"<?php } ?>>
                                    <?= Html::a('กลยุทธ์การขายสินค้าออนไลน์', ['info4']) ?>
                                </li>
                                <li <?php if ($id == 'info5') { ?>class="active"<?php } ?>>
                                    <?= Html::a('พัฒนาต้นแบบด้วยเครื่องพิมพ์ 3 มิติ', ['info5']) ?>
                                </li>

                            </ul>

                        </div>

                        <div class="search-form">
                            <form>
                                <input type="text" id="s" size="40" placeholder="Search..." />
                            </form>
                        </div>

                    </div>
                </nav>
            </div>

        </header>

        <div class="container">
            <?= $content ?>

        </div>
        <?php if ($id != 'create'){ ?>
        <p align="center">
            <?= Html::a('สมัครเข้าร่วมอบรม', ['create'], ['class' => 'btn btn-info', 'style' => ['width' => '150px']]) ?>
        </p>
        <?php }?>

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
