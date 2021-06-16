<?php

trait Sharable 
{ 
	private function share( $item )
	{
		return 'i want to share ' . $item . ' item';
	}
}

class Post
{
	use Sharable;

	private $item_string;

	public function __construct()
	{
		return $this->item_string = $this->share( 'jalebi' );
	}

	public function display()
	{
		return $this->item_string;
	}
}

class Comment
{
	use Sharable;

	private $item_string;

	public function __construct()
	{
		return $this->item_string = $this->share( 'jalebi' );
	}

}

$post = new Post;
print_r($post);
// print_r($post->display());