<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Url;

\app\assets\ErrorAsset::register($this);
?>

<div class="container text-center" id="error-page">
    <a href="<?= Url::home() ?>" class="product-brand">Alex <span>Solomaha</span></a>

    <h1><?= $name ?></h1>

    <div class="message">
        <?= $message ?>
    </div>

    <div class="actions">
        <a href="<?= Url::home() ?>" class="btn btn-primary">Home</a>
    </div>
</div>
