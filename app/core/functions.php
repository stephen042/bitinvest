<?php

function show($stuff)
{
	// code...
	echo "<pre>";
	print_r($stuff);
}

function set_value($var)
{
	// code...
	if (!empty($_POST[$var])) {
		return $_POST[$var];
	}
	return '';
}

function redirct($link)
{
	$script = "<script> window.location = '".ROOT."/".$link." ';</script>";
	echo $script;
	// header("location: ".ROOT."/".$link);
	die;
} 

function esc($stuff)
{
	return nl2br(htmlspecialchars($stuff));
}