<?php

namespace backend\controllers;

use Yii;
use backend\models\TblTrainingCourse;
use backend\models\TblTrainingCourseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\TblTrainingPlans;
use backend\models\TblLocations;

/**
 * TblTrainingCourseController implements the CRUD actions for TblTrainingCourse model.
 */
class TblTrainingCourseController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
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
     * Lists all TblTrainingCourse models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TblTrainingCourseSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblTrainingCourse model.
     * @param integer $training_id
     * @param integer $major_id
     * @param integer $tp_id
     * @return mixed
     */
    public function actionView($training_id, $major_id, $tp_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($training_id, $major_id, $tp_id),
        ]);
    }

    /**
     * Creates a new TblTrainingCourse model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TblTrainingCourse();
        $trainingplan = new TblTrainingPlans();

        if ($model->load(Yii::$app->request->post()) && $trainingplan->load(Yii::$app->request->post())) {
            $trainingplan->locations_id = $_POST['TblTrainingCourse']['locations'];
            if($trainingplan->save()) {
               $model->tp_id = $trainingplan->tp_id;
               $model->save();
            }
            return $this->redirect(['view', 'training_id' => $model->training_id, 'major_id' => $model->major_id, 'tp_id' => $model->tp_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'trainingplan' => $trainingplan,
            ]);
        }
    }

    /**
     * Updates an existing TblTrainingCourse model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $training_id
     * @param integer $major_id
     * @param integer $tp_id
     * @return mixed
     */
    public function actionUpdate($training_id, $major_id, $tp_id)
    {
        $model = $this->findModel($training_id, $major_id, $tp_id);
        
        $trainingplan = $model->tp;
       
        $model->locations = TblLocations::find()->where(['locations_id' => $trainingplan->locations_id])->all();
                
        

    

        if ($model->load(Yii::$app->request->post()) && $trainingplan->load(Yii::$app->request->post())) {
            
            $trainingplan->locations_id = $_POST['TblTrainingCourse']['locations'];
            if($trainingplan->save()) {
               $model->tp_id = $trainingplan->tp_id;
               $model->save();
            }
            
            return $this->redirect(['view', 'training_id' => $model->training_id, 'major_id' => $model->major_id, 'tp_id' => $model->tp_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'trainingplan' => $trainingplan,
            ]);
        }
    }

    /**
     * Deletes an existing TblTrainingCourse model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $training_id
     * @param integer $major_id
     * @param integer $tp_id
     * @return mixed
     */
    public function actionDelete($training_id, $major_id, $tp_id)
    {
        $this->findModel($training_id, $major_id, $tp_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblTrainingCourse model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $training_id
     * @param integer $major_id
     * @param integer $tp_id
     * @return TblTrainingCourse the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($training_id, $major_id, $tp_id)
    {
        if (($model = TblTrainingCourse::findOne(['training_id' => $training_id, 'major_id' => $major_id, 'tp_id' => $tp_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
