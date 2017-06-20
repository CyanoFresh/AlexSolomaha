<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/theme.css',
        'css/site.css',
    ];
    public $depends = [
        'app\assets\FontsAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}
