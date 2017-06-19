<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
//    public $sourcePath = '@bower/mybiz/';
    public $css = [
        'css/flexslider.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/style.css',
        'css/link.css'
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/jquery.flexslider.js',
        'js/jquery.inview.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
