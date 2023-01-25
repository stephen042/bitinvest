<?php
/**
 * Home controller page
 */
class  OurTeam extends Controller
{
	
	public function index()
	{
		// code...
		// $db = new Database();
		// $res = $db->query("select * From users");
		// show($res);
		$data['my_message'] = "";
		$this->view('ourteam', $data);
	}
}