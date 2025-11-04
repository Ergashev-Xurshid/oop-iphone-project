<?php
namespace app\controllers;

use yii\rest\Controller;
use app\classes\Phone;
use yii\web\Response;

class PhoneController extends Controller
{
    public function actionExample(): array
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        $phone = new Phone('Samsung', 'Galaxy S23', 256, 12000000);

        return $phone->toArray();
    }
}
