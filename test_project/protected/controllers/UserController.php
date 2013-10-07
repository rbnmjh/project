<?php

class UserController extends Controller
{
	public $layout = '//layouts/admin';
	/**
	 * Declares class-based actions.
	 */

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{

		$this->render('index');
	}

	public function actionRegister(){
		$user = new User();

		if(isset($_POST['User'])){
		
			$user->attributes = $_POST['User'];
			$user->password = crypt($user->password,$user->password);
			if($user->save()){
				//user is register successfully
				echo "saved successfully";
			}else{
				//user is not register successfully
			}

		}
		$data['user']= $user;
		$this->render('register',$data);
	}

	public function actionLogin(){
		
		$model=new LoginForm();
		$data['model']=$model;
		if(isset($_POST['LoginForm']))
		{			
			$model->attributes=$_POST['LoginForm'];			
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		$this->render('login',$data);
	}
}