<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                
                
               <li >
                    <a>
                        <i class="fa fa-fw fa-user"></i>
                        <span class="hidden-xs"><?php echo Yii::$app->user->identity->username; ?></span>

                    </a>

                </li>
                <li>
                      <?= Html::a(
                          'ออกจากระบบ',
                          ['/site/logout'],
                          ['data-method' => 'post', 'class' => 'btn btn-block btn-primary btn-flat']
                      )?>

                </li>

               

                
            </ul>
        </div>
    </nav>
</header>
