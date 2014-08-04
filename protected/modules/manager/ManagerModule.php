<?php

class ManagerModule extends CWebModule
{
	public $registrationUrl = array("/user/registration");
	public $recoveryUrl = array("/user/recovery/recovery");
	public $loginUrl = array("/user/login");
	public $logoutUrl = array("/user/logout");
	public $profileUrl = array("/user/profile");
	public $returnUrl = array("/user/profile");
	public $returnLogoutUrl = array("/user/login");
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'manager.models.*',
			'manager.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			Yii::app()->getComponent("booster");
			Yii::app()->theme = 'sb-admin';
			if(Yii::app()->user->isGuest){
				Yii::app()->user->loginRequired();
			}else{
				if(!Yii::app()->getModule('user')->isAdmin()){
					Yii::app()->request->redirect(Yii::app()->createUrl('user/logout'));
					Yii::app()->user->loginRequired();
					Yii::app()->end;
				}
			}
			
			return true;
		}
		else
			return false;
	}
}
