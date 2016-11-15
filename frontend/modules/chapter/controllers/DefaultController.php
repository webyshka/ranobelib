<?php

namespace frontend\modules\chapter\controllers;

use common\models\Chapters;
use common\models\Rubrics;
use yii\web\Controller;
use Yii;

/**
 * Default controller for the `chapter` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        $chapter = Chapters::find()->where(Yii::$app->request->queryParams)->one();
        $rubric = Rubrics::find()->where(['rubric_id' => $chapter->rubric_id])->one();
        //$rubric->url = Yii::$app->urlManager->createUrl(['/chapter/default/index', 'id' => $chapter->rubric_id]);
        return $this->render('index' ,[
            'chapter'=> $chapter,
            'rubric'=> $rubric,
        ]);
    }
}
