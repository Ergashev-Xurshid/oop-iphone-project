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

        $phone = new Phone('iPhone', 'iPhone 15 pro', 128, 13000000);

        return $phone->toArray();
    }
}
