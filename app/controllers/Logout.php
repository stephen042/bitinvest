<?php
/**
 * logout controller page
 */
class logout extends Controller
{
	
	public function index()
	{

        Auth::logout();
        
        redirct('home');
	}
}