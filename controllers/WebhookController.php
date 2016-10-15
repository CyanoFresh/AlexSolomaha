<?php

namespace app\controllers;

use Yii;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Class WebhookController
 *
 * Runs git pull & composer install & yii migrate after push on main repo.
 *
 * @package app\controllers
 * @author CyanoFresh <cyanofresh@gmail.com>
 */
class WebhookController extends Controller
{
    /**
     * @inheritdoc
     */
    public $enableCsrfValidation = false;

    /**
     * @var string Secret field on GitHub
     */
    public $secret = '73a90acaae2b1ccc0e969709665bc62f';

    /**
     * @var array of commands to be executed
     */
    public $commands = [
        'cd .. && /usr/bin/git pull 2>&1',
//        '/usr/bin/php ../yii migrate --interactive=0 2>&1',
    ];

    public function actionIndex()
    {
        $requestSignature = Yii::$app->request->headers->get('x-hub-signature');

        $hash = hash_hmac('sha1', Yii::$app->request->rawBody, $this->secret);
        $actualSignature = 'sha1=' . $hash;

        if ($requestSignature !== $actualSignature) {
            throw new BadRequestHttpException('Wrong signature');
        }

        foreach ($this->commands as $command) {
            echo 'Executing "' . $command . "\":\n\n";

            echo shell_exec($command);

            echo "\n\n";
        }
    }
}
