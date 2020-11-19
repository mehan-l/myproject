<?php

namespace app\controllers;

use app\models\Different;
use app\models\FormReviewModel;
use app\models\Grocerystore;
use app\models\Shoestore;
use app\models\Supermarkets;
use Yii;
use yii\data\ActiveDataProvider;
use yii\debug\models\timeline\DataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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
     * {@inheritdoc}
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
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /*Adding new reviw*/

    public function actionAddreview ()
	{
		$this->view->title = 'Добавить новый отзыв о магазине';
		$formreviewmodel = new FormReviewModel();

		if($formreviewmodel->load(Yii::$app->request->post()) && $formreviewmodel->validate()) {
			/*echo '<pre>'; print_r($formreviewmodel->category);
			die;*/
			switch ($formreviewmodel->category) {
				case 0:
					$grocerystore = new Grocerystore();
					$grocerystore->name = $formreviewmodel->name;
					$grocerystore->review = $formreviewmodel->review;
					$grocerystore->save();
					$this->refresh();
					break;
				case 1:
					$shoestore = new Shoestore();
					$shoestore->name = $formreviewmodel->name;
					$shoestore->review = $formreviewmodel->review;
					$shoestore->save();
					$this->refresh();
					break;
				case 2:
					$supermarkets = new Supermarkets();
					$supermarkets->name = $formreviewmodel->name;
					$supermarkets->review = $formreviewmodel->review;
					$supermarkets->save();
					$this->refresh();
					break;
				case 3:
					$different = new Different();
					$different->name = $formreviewmodel->name;
					$different->review = $formreviewmodel->review;
					$different->save();
					$this->refresh();
					break;
			}
		}

		return $this->render('addreview', compact('formreviewmodel'));
	}

	/*Reviews about grocerystore*/

	public function actionReviewaboutgrocerystore ()
	{
		$grocerystoreProvider = new ActiveDataProvider([
			'query' => Grocerystore::find(),
			'pagination' => [
				'pageSize' => '10'
			],
		]);
		$this->view->title = 'Отзывы о продуктовых магазинах';
    	return $this->render('reviewaboutgrocerystore', compact('grocerystoreProvider'));
	}

	/*reviews about shoestore*/

	public function actionReviewaboutshoestore ()
	{
		$this->view->title = 'Отзывы об обувных магазинах';
		$shoestorekProvider = new ActiveDataProvider([
			'query' => Shoestore::find(),
			'pagination' => [
				'pageSize' => '10'
			],
		]);
		return $this->render('reviewaboutshoestore', compact('shoestorekProvider'));
	}

	/*reviews about supermarkets*/

	public function actionReviewaboutsupermarkets ()
	{
		$this->view->title = 'Отзыв о супермаркетах';
		$supermarkProvider = new ActiveDataProvider([
			'query' => Supermarkets::find(),
			'pagination' => [
				'pageSize' => '10'
			],
		]);
    	return $this->render('reviewaboutsupermarkets', compact('supermarkProvider'));
	}

	/*reviews about different*/

	public function actionReviewaboutdif ()
	{
		$this->view->title = 'Отзыв о разных магазинах';
		$difProvider = new ActiveDataProvider([
			'query' => Different::find(),
			'pagination' => [
				'pageSize' => '10'
			],
		]);
		return $this->render('reviewaboutdif', compact('difProvider'));
	}

}
