<?php

/**
 *  app class
 */
class App
{
	protected $controller = "page404";
	protected $method = 'index';


	function __construct()
	{
		// code...
		$arr = $this->getUrl();

		$filename = "../app/controllers/".ucfirst($arr[0]).".php";
		if (file_exists($filename)) {
			require $filename;
			$this->controller = $arr[0];
			unset($arr[0]);
		}else{
			require "../app/controllers/".$this->controller.".php";
		}

		$mycontroller = new $this->controller();

		$mymethod = $arr[1] ?? $this->method;
		if (!empty($arr[1])) 
		{
	        if (method_exists($mycontroller, strtolower($mymethod)))
	        {
	            # code...
	            $this->method = strtolower($mymethod);
	            unset($arr[1]);
	        }			
		}

 		$arr = array_values($arr);
		// show($arr);		
        call_user_func_array([$mycontroller, $this->method], $arr);
		
	}

	private function getUrl()
	{
		$url = $_GET['url'] ?? 'home';
		$url = filter_var($url, FILTER_SANITIZE_URL);
		$arr = explode('/', $url);
		return $arr;
	}
}