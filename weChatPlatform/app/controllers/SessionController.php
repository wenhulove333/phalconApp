<?php

class SessionController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function loginAction()
    {
    	//First, we check the token which is generated randomly
    	if ($this->request->isPost())
    	{
	    	$name = $this->request->getPost("username");
	    	$password = $this->request->getPost("password");

	    	$user = Users::findFirstByName($name);
	    	if ($user)
	    	{
	    		if (!strcmp($password, $user->encryptedpassword))
	    		{
	    			return $this->response->redirect('Home/index');
	    		}
	    	} else {
	    		return $this->response->redirect('Users/register');
	    	}
    	}
    }
}

