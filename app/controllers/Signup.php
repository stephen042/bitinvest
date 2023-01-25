<?php
/**
 * signup controller page
 */
class Signup extends Controller
{
	
	public function index()
	{

		$data['errors'] = [];

		$user = new User();
		if($user->validate($_POST))
		{
			// print_r($_POST);
			
			$user = new User();
			if ($_SERVER['REQUEST_METHOD'] == 'POST') 
			{
				
				if ($user->validate($_POST)) 
				{
					$_POST['date'] = date("Y-m-d H:i:s");
					$_POST['role'] = "user";
					
					$user->insert($_POST);

					echo '<script type="text/javascript"> alert("Your Profile was Successfully created PLEASE LOGIN ")</script>';

					redirct('login');
				}
			}

		}

		$data['errors'] = $user->errors;

		// print_r($_POST);
		
		// $data['post'] = '';
		$this->view('signup', $data);
	}
}