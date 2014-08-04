<?php

class ScheduleController extends Controller
{
	public function actionAdmin()
	{
		Yii::app()->theme = Yii::app()->params['adminTheme'];
		
		$this->render('admin');
	}

	public function actionCalendarEvents()
	{
		$all = Schedule::model()->findAll();
		foreach($all as $row)
		{
			$items[] = array(
				'title'=>''
			);
		}

	    $items[]=array(
	        'title'=>'Meeting',
	        'start'=>'2014-10-23',
	        'color'=>'#CC0000',
	        'allDay'=>true,
	        'url'=>'http://anyurl.com'
	    );
	    $items[]=array(
	        'title'=>'Meeting reminder',
	        'start'=>'2014-10-19',
	        'end'=>'2014-10-22',
	 
	        // can pass unix timestamp too
	        // 'start'=>time()
	 
	        'color'=>'blue',
	    );
	 
	    echo CJSON::encode($items);
	    Yii::app()->end();
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