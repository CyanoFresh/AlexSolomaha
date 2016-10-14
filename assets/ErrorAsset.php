<?php

namespace app\assets;

use yii\web\AssetBundle;

class ErrorAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/error.css',
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}
