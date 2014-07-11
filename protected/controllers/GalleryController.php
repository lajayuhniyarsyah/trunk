<?php

class GalleryController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAdmin()
	{
		Yii::app()->theme = Yii::app()->params['adminTheme'];
		// search
		$model = new Gallery('search');
		$newGallery = new Gallery;
		$model->unsetAttributes();
		if(isset($_GET['Gallery'])){

		}

		// endsearch

		// post new gallery
		if(isset($_POST['Gallery']) && Yii::app()->request->isAjaxRequest){
			header('Content-Type:application/json');
			$newGallery->attributes = $_POST['Gallery'];
			if($newGallery->save())
			{
				$return = array(
					'saved'=>1,
					'id'=>$newGallery->id,
				);
			}else{
				$return = array(
					'saved'=>0,
					'message'=>$newGallery->errors
				);
			}
			echo CJSON::encode($return);

			Yii::app()->end();
		}

		$this->render('admin',array('model'=>$model,'newGallery'=>$newGallery));
	}

	public function actionView($id){
		Yii::app()->theme = Yii::app()->params['adminTheme'];
		$model = Gallery::model()->findByPk($id);
		if(!$model) throw new CHttpException(404,'Gallery not found');

		$photos = new CArrayDataProvider($model->details,array(
			'keyField'=>'id',
		));

		$galleryDetail = new GalleryDetail;
		$this->render('view',array('model'=>$model,'photos'=>$photos,'galleryDetail'=>$galleryDetail));
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