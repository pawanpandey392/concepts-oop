<?php

class Contact extends Controller
{
	public function index( $name = '', $otherName = '' )
	{
		echo $name . ' ' . $otherName;
	}

	public function sanitize()
	{
		echo 'contact/sanitize';
	}
}