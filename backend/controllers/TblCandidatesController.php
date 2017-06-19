<?php

namespace backend\controllers;

use Yii;
use backend\models\TblCandidates;
use backend\models\TblCandidatesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblCandidatesController implements the CRUD actions for TblCandidates model.
 */
class TblCandidatesController extends Controller
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
     * Lists all TblCandidates models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TblCandidatesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblCandidates model.
     * @param integer $candidates_id
     * @param integer $training_id
     * @return mixed
     */
    public function actionView($candidates_id, $training_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($candidates_id, $training_id),
        ]);
    }

    /**
     * Creates a new TblCandidates model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TblCandidates();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'candidates_id' => $model->candidates_id, 'training_id' => $model->training_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TblCandidates model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $candidates_id
     * @param integer $training_id
     * @return mixed
     */
    public function actionUpdate($candidates_id, $training_id)
    {
        $model = $this->findModel($candidates_id, $training_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'candidates_id' => $model->candidates_id, 'training_id' => $model->training_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TblCandidates model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $candidates_id
     * @param integer $training_id
     * @return mixed
     */
    public function actionDelete($candidates_id, $training_id)
    {
        $this->findModel($candidates_id, $training_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblCandidates model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $candidates_id
     * @param integer $training_id
     * @return TblCandidates the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($candidates_id, $training_id)
    {
        if (($model = TblCandidates::findOne(['candidates_id' => $candidates_id, 'training_id' => $training_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
