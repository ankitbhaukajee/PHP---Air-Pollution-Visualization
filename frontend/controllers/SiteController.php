<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\UsaData;
use app\models\UsDetailData;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
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
    public function actions()
    {
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
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionMap()
    {
    	return $this->render('map');
    }

    
    

    public function actionAbout()
    {
    	
            $poster = Yii::$app->request->post();
            $stateId= $poster['id'];
            //echo $stateId;
            $event = UsDetailData::find()->where(['state' => $stateId])->all();
            $data=[];
            $data['id']=$event[0]['id'];
            $data['white']=$event[0]['white'];
            $data['black']=$event[0]['black'];
            $data['hispanic']=$event[0]['hispanic'];
            $data['state_name']=$event[0]['state_name'];
            //print_r($data);
              return \yii\helpers\Json::encode($data);
        // //exit;
        //  $data = UsDetailData::find()->where(['state' => $stateId])->all();
        // // print_r($data);

        // return $this->render('state',['data'=>$data]);
    }
    public function actionState()
    {
            return $this->render('state');
    }

    
    

   
    

   
}
