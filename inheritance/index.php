<?php

require_once '../error-reporting/index.php';

class Parenting
{
	protected $firstname = 'Pawan';
	protected $lastname = 'Pandey';

	protected function concatUserName()
	{
		return $this->firstname . ' ' . $this->lastname;
	}
}
// exit('here');

class Childish extends Parenting 
{
	public function getName()
	{
		return self::concatUserName();
		return parent::concatUserName();
		return $this->concatUserName();
	}
}

$child = new Childish;
echo $child->getName();