<?php

namespace app\modules\post\controllers;

use yii\web\Controller;

/**
 * Default controller for the `rubric` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        $module = \Yii::$app->getModule('post');
        return $this->render('index',['module' => $module]);
    }
}
