<?php

class ProductController extends Controller
{
	public function actionIndex()
	{
		Yii::app()->theme = 'sb-admin';
		$this->render('index');
	}
	public function actionAdmin()
	{
		Yii::app()->theme = 'sb-admin';
		$model = new Product('search');
		if(isset($_GET['Product'])){

		}

		$this->render('admin',array('model'=>$model));
	}

	public function actionCreate(){
		Yii::app()->theme='sb-admin';
		$model = new Product;

		if(isset($_POST['Product'])){
			$model->attributes = $_POST['Product'];
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array('model'=>$model));
	}


	public function actionView($id){
		Yii::app()->theme = 'sb-admin';
		$model = Product::model()->findByPk($id);

		$imageDataProvider = new CArrayDataProvider($model->productImages,array(
			'keyField'=>'id'
		));

		if(!$model) throw new CHttpException(404,'Product Not Found');

		$this->render('view',array('model'=>$model,'imageDataProvider'=>$imageDataProvider));
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}