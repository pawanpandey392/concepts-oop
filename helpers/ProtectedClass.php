<?php
class ProtectedClass 
{
	protected $string;
	protected $numericId;
	protected $uniqueId;
	protected $length = 25;
	protected $digits = '0123456789';
	protected $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

	public function __construct()
	{
		$this->uniqueId = $this->_generateUniqueId();
		$this->numericId = $this->__generateUniqueNumericId();
		$this->string = $this->__generateUniqueStringId();
	}

	protected function _generateUniqueId()
	{
		return $this->uniqueId = uniqid().uniqid().uniqid();
	}

	protected function __generateUniqueStringId()
	{
	    for ( $i = 0; $i < $this->length; $i++ ) { 
	    	$this->string .= $this->characters[ mt_rand( 0, strlen($this->characters) - 1 ) ];
	    }
	    return $this->string;
	}

	protected function __generateUniqueNumericId()
	{
	    for ( $i = 0; $i < $this->length; $i++ ) { 
	    	$this->numericId .= $this->digits[ mt_rand( 0, strlen($this->digits) - 1 ) ];
	    }
	    return $this->numericId;
	}

	protected function __validateEmailAddress( $args )
	{
		return ( filter_var( $args, FILTER_VALIDATE_EMAIL ) ) ? $args : 'Invalid email format.';
	}

	protected function __validateUrl( $args )
	{
		return ( preg_match( "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $args ) ) ? $args : 'Invalid url format';
	}
 
	protected function __validateName( $args ) 
	{
		$args = $this->__trimAndStripString( $args );
		if ( strpos( $args, ' ' ) ) {
			$args = explode( ' ', $args );
			foreach ( $args as $key => $value ) {
				$args[ $key ] = $this->__removeSpecialCharacters( $value );
			}
			return implode( ' ', $args ); 
		} else {
			return $this->__removeSpecialCharacters( $this->__trimAndStripString( $args ) );
		}
	}

	protected function __removeSpecialCharacters( $args ) 
	{
		return preg_replace( '/[^A-Za-z0-9\-]/', '', $args );
	}

	protected function __generateFileName( $args = false )
	{
		if ( $args ) {
			$args = $this->__removeSpecialCharacters( $args );
			return $this->__suffleString( $this->__appendTimeStampToString( $args ) );
		} else {
			return $this->__stringLength( $this->__appendTimeStampToString( $this->uniqueId ), 50 );
		}
	}

	protected function __makeASlug( $args = false )
	{
		if ( $args ) {
			return strtolower( preg_replace( '/\W+/', '-', $args ) );
		} else {
			return $this->__stringLength( $this->uniqueId, 10 );
		}
	}

	protected function __isLocalhost( $args = false )
	{
		return in_array( $_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'] ) ? true : false;
	}

	protected function __formatNumbers( $args, $precision = 2 )
	{
	    if ( $args >= 1000 && $args < 1000000 ) {
	        return number_format( $args / 1000, $precision ).'K';
	    } else if ( $args >= 1000000 &&  $args < 1000000000) {
	        return number_format( $args / 1000000, $precision ).'M';
	    } else if ( $args >= 1000000000) {
	        return number_format( $args / 1000000000, $precision ).'B';
	    } else {
	        return $args;
	    }
	}

	private function __trimAndStripString( $args = false )
	{
		return trim( strip_tags( $args ) );
	}

	private function __appendTimeStampToString( $args = false )
	{
		return $args . time() . $args;
	}

	private function __suffleString( $args = false )
	{
		return $this->__stringLength( str_shuffle( $clean_str ) );
	}

	private function __stringLength( $args, $length = false )
	{
		return substr( $args, 0, $length ? $length : $this->length );
	}

}