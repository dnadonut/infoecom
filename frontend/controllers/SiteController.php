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
class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function actionGetLocation() {


        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $major_id = $parents[0];

                $municipios = TblTrainingCourse::find()->joinWith(['tp'])->joinWith(['tp.locations'])->where(['major_id' => $major_id])->all();

                foreach ($municipios as $key => $value) {
                    $data[] = ['id' => $value['tp']['locations']['locations_id'], 'name' => $value['tp']['locations']['location_name']];
                }

                echo Json::encode(['output' => $data, 'selected' => '']);
                return;
            }
        }
        echo Json::encode(['output' => '', 'selected' => '']);
    }

    public function actionGetDate() {
        function ThaiDate($day) {
            if ($day == null) {
                return "ไม่มี";
            }
            $listday = explode("-", $day);

//$ThDay = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์" );
            $ThMonth = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน",
                "พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม",
                "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");

//$a = date( "w" );	// ค่าวันในสัปดาห์ (0-6)
            $b = $listday[1] - 1; // ค่าเดือน (1-12)
            $c = $listday[2]; // ค่าวันที่(1-31)
            $d = $listday[0] + 543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.

            return " $c $ThMonth[$b]  $d";
        }
        if (isset($_POST['depdrop_parents'])) {
            $ids = $_POST['depdrop_parents'];
            $major_id = empty($ids[0]) ? null : $ids[0];
            $location_id = empty($ids[1]) ? null : $ids[1];
            if ($major_id != null) {

                $municipios = TblTrainingCourse::find()->joinWith(['tp'])->joinWith(['tp.locations'])->where(['major_id' => $major_id])->andWhere(['tbl_locations.locations_id' => $location_id])->all();

                foreach ($municipios as $key => $value) {

                    $start_date = $value['tp']['start_date'];
                    $end_date = $value['tp']['end_date'];
                    $date = ThaiDate($start_date).' - '.ThaiDate($end_date) ;
                    $data[] = ['id' => $value['training_id'], 'name' => $date];
                }

                echo Json::encode(['output' => $data, 'selected' => '']);
                return;
            }
        }
        echo Json::encode(['output' => '', 'selected' => '']);



    }

    public function actionCreate() {
        
        $this->layout = 'info';
        
        
        $model = new TblCandidates();
        if ($model->load(Yii::$app->request->post())) {
            
            $model->save();
            
            return $this->redirect(['success', 'candidates_id' => $model->candidates_id, 'training_id' => $model->training_id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup() {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                    'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

    public function actionInfo1() {
        $this->layout = 'info';
        return $this->render('info1');
    }

    public function actionInfo2() {
        $this->layout = 'info';
        return $this->render('info2');
    }

    public function actionInfo3() {
        $this->layout = 'info';
        return $this->render('info3');
    }

    public function actionInfo4() {
        $this->layout = 'info';
        return $this->render('info4');
    }

    public function actionInfo5() {
        $this->layout = 'info';
        return $this->render('info5');
    }
    
     public function actionSuccess() {
        $this->layout = 'success';
        return $this->render('empty');
    }


}
