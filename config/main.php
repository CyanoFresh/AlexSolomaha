<?php

$params = require(__DIR__ . '/params.php');

return [
    'id' => 'alexsolomaha',
    'name' => 'Alex Solomaha',
    'language' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['ru', 'en'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableLanguageDetection' => false,
            'rules' => [
                '' => 'site/index',
            ],
        ],
        'view' => [
            'class' => 'rmrevin\yii\minify\View',
            'minifyPath' => '@webroot/assets',
            'jsPosition' => [\yii\web\View::POS_END],
            'forceCharset' => 'UTF-8',
        ],
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [],
                    'js' => [],
                    'depends' => [],
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'css' => [],
                    'js' => [],
                    'depends' => [],
                ],
            ],
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                ],
            ],
        ],
    ],
    'params' => $params,
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
];
