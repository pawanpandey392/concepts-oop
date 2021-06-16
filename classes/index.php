<?php

/**
* Classes Example
*/
class User
{
	protected $username;
	protected $contact;

	public function setName ( $name )
	{
		$this->username = $name;
	}

	public function getName ()
	{
		return $this->username;
	}
}

