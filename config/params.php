<?php

use yii\helpers\ArrayHelper;

$params = [];

return ArrayHelper::merge($params, require 'params-local.php');
