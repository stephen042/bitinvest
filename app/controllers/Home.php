<?php
/**
 * Home controller page
 */
class Home extends Controller
{
	
	public function index()
	{

		$data['title'] = 'user->errors';

		// show($_POST);
	
		$this->view('home', $data);
	}
}