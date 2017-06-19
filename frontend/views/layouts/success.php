<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
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
    <body id="top" data-spy="scroll" style="background-color:powderblue;">
        <?php $this->beginBody() ?>


        <div class="container" style="margin-top: 25px;">

            <div class="panel panel-success">
                <div class="panel-heading" align="center"><h3 style="margin-top: 10px"> สมัครเข้าร่วมอบรมเสร็จเรียบร้อย</h3>
                </div>

            </div>
            <p align="right" >
                <?= Html::a('กลับสู่หน้าหลัก', ['index'], ['class' => 'btn btn-default', 'style' => ['width' => '150px']]) ?>
            </p>

        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
