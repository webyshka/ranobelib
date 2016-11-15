<?php

namespace app\modules\post\controllers;

use Yii;
use common\models\Chapters;
use common\models\Rubrics;
use backend\models\AddChapterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ChapterController implements the CRUD actions for Chapters model.
 */
class ChapterController extends Controller {

    public $rubrics=[];


    /**
     * Select all rubrics to radioList in Chapter.
     */
    public function init(){
       $all_rubrics = Rubrics::find()
            ->select(['rubric_id','title'])
            ->asArray()
            ->all();

       $this->rubrics[0] = 'Выбрать категорию';
       foreach ($all_rubrics as $one) {
            $this->rubrics[$one['rubric_id']] = $one['title'];
       }
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Chapters models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AddChapterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Chapters model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'rubrics' => $this->rubrics,
        ]);
    }

    /**
     * Creates a new Chapters model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Chapters();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'rubrics' => $this->rubrics,
            ]);
        }
    }

    /**
     * Updates an existing Chapters model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'rubrics' => $this->rubrics,
            ]);
        }
    }

    /**
     * Deletes an existing Chapters model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Chapters model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Chapters the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Chapters::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
