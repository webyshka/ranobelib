<?php

namespace frontend\modules\rubric\controllers;

use common\models\Rubrics;
use Yii;
use yii\web\Controller;
use backend\models\AddRubricSearch;
use backend\models\AddChapterSearch;
use common\models\Chapters;
/**
 * Default controller for the `post` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public $layout = '/other';

    public function actionIndex() {
        $searchModel = new AddRubricSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSingle() {
       $chapters = Chapters::find()->where(Yii::$app->request->queryParams)->all();
       $rubric = Rubrics::find()->where(Yii::$app->request->queryParams)->one();
        return $this->render('single', [
            'chapters' => $chapters,
            'rubric' => $rubric,
        ]);
    }
}
