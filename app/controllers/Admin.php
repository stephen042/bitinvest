<?php
/**
 * Admin controller page
 */
class Admin extends Controller
{
	
	public function index()
	{
		if (!Auth::logged_in()) {

			redirct('home');
		}

		$data['title'] = 'dashboard';

		// show($_POST);
	
		$this->view('admin/dashboard', $data);
	}
	
	public function profile($id = null)
	{

		$data['title'] = 'profile';

		// show($_POST);
	
		$this->view('admin/profile', $data);
	}
}