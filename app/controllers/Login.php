<?php
/**
 * Login controller page
 */
class Login extends Controller
{
	
	public function index()
	{
		$data['errors'] = [];

		$data['title'] = 'login';

		$user = new User();		

		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			// validate
			$row = $user->first([
				'email' => $_POST['email']
			]);
			if ($row) 
			{
				
				if ($row->password === $_POST['password']) {

					if ($row->role === 'admin') {
						
					// authenticate
					Auth::authenticate($row);

					// show($_SESSION['USER_DATA']);die;
					redirct('admin/dashboard');

					}elseif ($row->role === 'user') {
						
					// authenticate
					Auth::authenticate($row);

					// show($_SESSION['USER_DATA']);die;
					redirct('home');

					}
				}

			}
			

			$data['errors']['email'] = 'invalid email or password';
		}


		// show($_POST);
	
		$this->view('login', $data);
	}
}