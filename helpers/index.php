<?php
require_once 'ProtectedClass.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Helper extends ProtectedClass
{
	public function getUniqueId() 
	{
		return $this->uniqueId;
	}

	public function getFreshString() 
	{
		return $this->string;
	}

	public function getNumericId() 
	{
		return $this->numericId;
	}

	public function getUpperCaseString() 
	{
		return strtoupper( $this->string );
	}

	public function getLowerCaseString()
	{
		return strtolower( $this->string );
	}

	public function getValidatedEmail( $args )
	{
		return $this->__validateEmailAddress( $args );
	}

	public function getValidatedUrl( $args )
	{
		return $this->__validateUrl( $args );
	}

	public function getValidateName( $args ) 
	{
		return $this->__validateName( $args );
	}

	public function getFileName( $args = false ) 
	{
		return $this->__generateFileName( $args );
	}

	public function getSlug( $args = false ) 
	{
		return $this->__makeASlug( $args );
	}

	public function isLocalhost() 
	{
		return $this->__isLocalhost();
	}

	public function getFormattedNumbers( $args ) 
	{
		return $this->__formatNumbers( $args );
	}

}

$string = 'dfghdfh#&)&kjd^&%shflkalaf';
$helper = new Helper;

echo "getUniqueId -> " . tabspace() . $helper->getUniqueId();
echo newline();
echo "getFreshString -> " . tabspace() . $helper->getFreshString();
echo newline();
echo "getNumericId -> " . tabspace() . $helper->getNumericId();
echo newline();
echo "getUpperCaseString -> " . tabspace() . $helper->getUpperCaseString();
echo newline();
echo "getLowerCaseString -> " . tabspace() . $helper->getLowerCaseString();
echo newline();
echo "getValidatedEmail -> " . tabspace() . $helper->getValidatedEmail('pawanpandey@gmail.com');
echo newline();
echo "getValidatedUrl -> " . tabspace() . $helper->getValidatedUrl('http://www.google.com');
echo newline();
echo "getValidateName -> " . tabspace() . $helper->getValidateName('<span style="color: red">Pawan Pan%$#dey </span>');
echo newline();
echo "getFileName -> " . tabspace() . $helper->getFileName();
echo newline();
echo "getSlug -> " . tabspace() . $helper->getSlug();
echo newline();
echo "isLocalhost -> " . tabspace() . $helper->isLocalhost();
echo newline();
echo "getFormattedNumbers -> " . tabspace() . $helper->getFormattedNumbers(10000);



function newline() { return '<br>'; }
function tabspace() { return '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; }








