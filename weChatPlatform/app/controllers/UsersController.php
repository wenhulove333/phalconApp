<?php

class UsersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->email = "Hello World!";
    }

	public function registerAction()
    {
    	if ($this->request->isPost())
    	{
	    	$name = $this->request->getPost("username");
	    	$password = $this->request->getPost("password");
	    	$birthday = $this->request->getPost("birthday");
	    	$gender = $this->request->getPost("gender");
	    	$mobilephone = $this->request->getPost("mobilephone");
	    	$email = $this->request->getPost("email");

	    	$user = Users::findFirstByName($name);

	    	if (!$user)
	    	{
	    		$user = new Users();
	    	}

	    	$user->name = $name;
	    	$user->encryptedpassword = $password;
	    	$user->birthday = $birthday;
	    	$user->gender = $gender;
	    	$user->mobilephone = $mobilephone;
	    	$user->email = $email;

	    	$user->save();

	    	return $this->response->redirect('Session/login');
    	}
    }
}

