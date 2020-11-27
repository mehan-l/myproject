<?php

namespace app\controllers;

use app\models\WhoIsClass;
use Yii;
use app\models\Grocerystore;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GrocerystoreController implements the CRUD actions for Grocerystore model.
 */
class GrocerystoreController extends WhoIsClass
{
    public $layout = 'admin';
    /**
     * {@inheritdoc}
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
     * Lists all Grocerystore models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (parent::whoAreYou() == false) {
            $this -> redirect('http://62.109.20.176/');
        }
        $dataProvider = new ActiveDataProvider([
            'query' => Grocerystore::find(),
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Grocerystore model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (parent::whoAreYou() == false) {
            $this -> redirect('http://62.109.20.176/');
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Grocerystore model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (parent::whoAreYou() == false) {
            $this -> redirect('http://62.109.20.176/');
        }
        $model = new Grocerystore();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Grocerystore model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (parent::whoAreYou() == false) {
            $this -> redirect('http://62.109.20.176/');
        }
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Grocerystore model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if (parent::whoAreYou() == false) {
            $this -> redirect('http://62.109.20.176/');
        }
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Grocerystore model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Grocerystore the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (parent::whoAreYou() == false) {
            $this -> redirect('http://62.109.20.176/');
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
