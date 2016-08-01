<?php

namespace app\module\rubric\controllers;

use yii\web\Controller;
use backend\models\AddRubric;

/**
 * Default controller for the `rubric` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAdd() {
        $model = new AddRubric();

        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $results = \Yii::$app->request->post();
            var_dump($results);
            die;

        }

        return $this->render('add',['model'=>$model]);
    }
}
