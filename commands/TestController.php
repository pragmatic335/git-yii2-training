<?php


namespace app\commands;


use yii\console\Controller;

/**
 * Для тестов в написании запросов
 */
class TestController extends Controller
{
    public function actionTest() {
        echo 'hello';
    }

}