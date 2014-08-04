<?php

class ProductController extends Controller
{
	public function actionIndex()
	{
		Yii::app()->theme = Yii::app()->params['adminTheme'];
		$this->render('index');
	}
	public function actionAdmin()
	{

		Yii::app()->theme = Yii::app()->params['adminTheme'];
		$model = new Product('search');
		$model->unsetAttributes();
		if(isset($_GET['Product'])){
			
		}

		$this->render('admin',array('model'=>$model));
	}

	public function actionCreate(){
		Yii::app()->theme = Yii::app()->params['adminTheme'];
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
		Yii::app()->theme = Yii::app()->params['adminTheme'];
		// fetch model
		$model = Product::model()->findByPk($id);
		if(!$model) throw new CHttpException(404,'Product Not Found');

		// AJAX EDITABLE
		if(Yii::app()->request->isAjaxRequest && isset($_POST['scenario'])){
			// if editable detrail view update
			$model->{$_POST['name']} = $_POST['value'];
			$model->save();
			Yii::app()->end();
		}

		
		// IMAGE MODEL
		$imageModel = new ProductImages;
		if(isset($_POST['ProductImages'])){
			$imageModel->attributes = $_POST['ProductImages'];
			
			$imageModel->product_id = $model->id;
			$imageModel->main_image = false;
			if($imageModel->save()){
				// recall
				$this->redirect(array('view','id'=>$model->id));

			}
		}

		$listModel = new ProductList;
		if(isset($_POST['ProductList'])){
			$listModel->attributes = $_POST['ProductList'];
			$listModel->product_id = $model->id;
			if($listModel->save())
				$this->redirect(array('view','id'=>$model->id));
		}



		$model = Product::model()->findByPk($id);
		

		$imageDataProvider = new CArrayDataProvider($model->productImages,array(
			'keyField'=>'id'
		));

		$listDataProvider = new CArrayDataProvider($model->productLists,array(
			'keyField'=>'id',
		));

		

		$this->render('view',array('model'=>$model,'imageDataProvider'=>$imageDataProvider,'imageModel'=>$imageModel,'listDataProvider'=>$listDataProvider,'listModel'=>$listModel));
	}


	public function actionUpdate($id){
		$model = Product::model()->findByPk($id);
		if(!$model) throw new CHttpException(404,'Data Not Found!');


		$this->renderPartial('update',array('model'=>$model));
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


	public function actionDeleteImage($id)
	{
		$image = ProductImages::model()->findByPk($id);
		if(!$image) throw new CHttpException(404,'Data Not Found');

		$image->delete();
	}

	public function actionSetMainImage(){
		if(isset($_POST['id'])){
			$id = (int) $_POST['id'];
			$model = ProductImages::model()->findByPk($id);
			if(!$model) throw new CHttpException(404,'Image Not Found');
			// find product images who checked
			$checked = ProductImages::model()->findByAttributes(array('product_id'=>$_POST['productId'],'main_image'=>1));
			if($checked){
				$checked->main_image = 0;
				$checked->update();
			}
			$model->main_image = 1;
			$model->update();
			Yii::app()->end();
		}
	}
}