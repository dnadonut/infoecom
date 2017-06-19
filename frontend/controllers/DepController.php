<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use frontend\models\TblCandidates;
use frontend\models\TblLocations;
use frontend\models\TblMajors;
use frontend\models\TblTrainingCourse;
use frontend\models\TblTrainingPlans;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class DepController extends Controller {

    /**
     * @inheritdoc
     */
    public function actionGetLocation() {
        var_dump('555');
        exit;
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $major_id = $parents[0];
                $out = $this->getLocation($major_id);
                echo Json::encode(['output' => $out, 'selected' => '']);
                return;
            }
        }
        echo Json::encode(['output' => '', 'selected' => '']);
    }

    public function actionGetDate() {
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $ids = $_POST['depdrop_parents'];
            $major_id = empty($ids[0]) ? null : $ids[0];
            $location_id = empty($ids[1]) ? null : $ids[1];
            if ($major_id != null) {
                $data = $this->getDate($major_id,$location_id);
                echo Json::encode(['output' => $data, 'selected' => '']);
                return;
            }
        }
        echo Json::encode(['output' => '', 'selected' => '']);
    }

    protected function getLocation($id) {
        $datas = TblTrainingCourse::find()->joinWith(['tp'])->joinWith(['tp.locations'])->where(['major_id'=> $id])->all();
        return $this->MapData($datas, 'locations_id', 'location_name');
    }

    protected function getDate($major_id,$id) {
        $datas = TblTrainingCourse::find()->joinWith(['tp'])->joinWith(['tp.locations'])->where(['major_id'=> $major_id])->andWhere(['tbl_locations.locations_id'=>$id])->all();
        return $this->MapData($datas, 'training_id', 'tp.start_date');
    }
    
    protected function MapData($datas,$fieldId,$fieldName){
     $obj = [];
     foreach ($datas as $key => $value) {
         array_push($obj, ['id'=>$value->{$fieldId},'name'=>$value->{$fieldName}]);
     }
     return $obj;
 }

    
}
