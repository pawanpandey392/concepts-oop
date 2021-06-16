<?php
include '../error-reporting/index.php';

/**
*  Singleton Design Pattern
*/
class User
{
	private static $instance;

	private function __construct()
	{
		/* PRIVATE */
	}

	public static function getInstance()
	{
		if ( ! isset( User::$instance ) )
			User::$instance = new User();

		return User::$instance;
	}

	public function getQuery()
	{
		return 'Select * from users where id = 13221';
	}
}

$use = new User;
echo '<pre>';print_r($use);die;

$user = User::getInstance();
$user1 = User::getInstance();
$user2 = User::getInstance();
$user3 = User::getInstance();

echo '<pre>';

var_dump($user);
var_dump($user1);
var_dump($user2);
echo('<br>');
var_dump($user3->getQuery());