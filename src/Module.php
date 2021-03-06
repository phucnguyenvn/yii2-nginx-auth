<?php

namespace macfly\nginxauth;

use Yii;
use yii\web\Response;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        if (Yii::$app->has('user')) {
            Yii::$app->user->enableSession = false;
        }

        // Default reply format is json
        Yii::$app->response->format = Response::FORMAT_JSON;
    }
}
