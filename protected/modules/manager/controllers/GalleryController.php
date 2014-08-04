<?php

class GalleryController extends Controller
{

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='galleryDescriptionForm')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

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

		if(isset($_POST['Gallery'])){
			$model->attributes = $_POST['Gallery'];
			if($model->update()){
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		// GALLERY FORM AJAX VALIDATION
		// $this->performAjaxValidation($model);
		$photos = new CArrayDataProvider($model->details,array(
			'keyField'=>'id',
		));



		$galleryDetail = new GalleryDetail;
		if(isset($_POST['GalleryDetail'])){
			$galleryDetail->attributes = $_POST['GalleryDetail'];
			$galleryDetail->file = CUploadedFile::getInstance($galleryDetail,'file');
			$galleryDetail->gallery_id=$model->id;
			if($galleryDetail->file){
				$galleryDetail->file_name=time().Yii::app()->user->getId().'.'.$galleryDetail->file->extensionName;
			}
			if($galleryDetail->save())
			{
				$this->redirect(array('view','id'=>$id));
			}
			// echo '<pre>';
			// var_dump($galleryDetail);
			// echo '</pre>';
		}




		$this->render('view',array('model'=>$model,'photos'=>$photos,'galleryDetail'=>$galleryDetail));
	}

	public function actionEditDetail(){
		if(Yii::app()->request->isAjaxRequest && isset($_POST['scenario']))
		{
			$model = GalleryDetail::model()->findByPk($_POST['pk']);
			if(!$model) throw new CHttpException(404,'Rejected!');

			$model->{$_POST['name']}=$_POST['value'];
			var_dump($model->attributes);
			$model->update();
			Yii::app()->user->updateSession();
			Yii::app()->end();
		}
	}

	public function actionDeleteDetail($id){
		$model = GalleryDetail::model()->findByPk($id);
		if(!$model) throw new CHttpException(404,'Data Not Found');

		$model->delete();
	}



	public function actionSetMainImage(){
		if(isset($_POST['id'])){
			$id = (int) $_POST['id'];
			$model = GalleryDetail::model()->findByPk($id);
			if(!$model) throw new CHttpException(404,'Gallery Not Found');

			$model->Gallery->main_cover = $model->id;
			
			$model->Gallery->update();
			Yii::app()->end();
		}
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