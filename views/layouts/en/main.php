<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);

$title = Yii::$app->name;

$description = 'My personal website to let you know who am I and what I am doing';
$keywords = 'Alex Solomaha Web Developer Web Game Developer Embedded Developer PHP Yii 2 Framework MySQL HTML5 CSS3';

$mainImageUrl = Url::home(true) . 'img/main.jpg';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= Html::csrfMetaTags() ?>

    <title><?= $title ?></title>

    <meta name="og:url" content="<?= Url::to('', true) ?>">
    <meta name="og:title" content="<?= $title ?>">
    <meta name="og:site_name" content="<?= Yii::$app->name ?>">
    <meta name="og:image" content="<?= $mainImageUrl ?>">
    <meta name="og:type" content="profile">
    <meta name="og:locale" content="<?= Yii::$app->language ?>">

    <meta http-equiv="content-language" content="<?= Yii::$app->language ?>">
    <link rel="alternate" hreflang="ru" href="<?= Url::current(['language' => 'ru'], true) ?>">
    <link rel="alternate" hreflang="<?= Yii::$app->language ?>" href="<?= Url::current(['language' => Yii::$app->language], true) ?>">

    <meta itemprop="name" content="<?= $title ?>">
    <meta itemprop="image" content="<?= $mainImageUrl ?>">

    <meta name="application-name" content="<?= Yii::$app->name ?>">
    <meta name="subject" content="Alex Solomaha">
    <meta name="classification" content="Personal site">

    <meta name="theme-color" content="#f50057">

    <link rel="image_src" href="<?= $mainImageUrl ?>">

    <link rel="me" href="mailto:cyanofresh@gmail.com">
    <link rel="me" href="sms:+380975300688">

    <?php $this->head() ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>

<!-- Google Tag Manager -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-NM3DNV" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NM3DNV');</script>
<!-- End Google Tag Manager -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
