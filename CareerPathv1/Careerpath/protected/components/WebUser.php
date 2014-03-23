<?php

class WebUser extends CWebUser {

	public $_user;
		
	public function isUser()
	{
		$user = $this->loadUser(Yii::app()->user->id);
		if ($user===null)
			return 0;
		else
			return intval($user->type_id) == 1;
	}
	
	public function isAdmin()
	{
		$user = $this->loadAdmin(Yii::app()->user->id);
		if ($user===null)
			return 0;
		else
			return intval($user->type_id) == 2;
	}

	protected function loadUser($id=null)
	{
		if($this->_user===null)
		{
	    	if($id!==null):
	    	     $this->_user = User::model()->findByPk($id);
	   	 	endif;
		}
			return $this->_user;
	}
	
	protected function loadAdmin($id=null)
	{
		if($this->_user===null)
		{
			if($id!==null):
			$this->_user = Admin::model()->findByPk($id);
			endif;
		}
		return $this->_user;
	}
}
?>