<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Author {
    private $firstName;
    private $lastName;
     
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
 
    public function getFirstName() {
        return $this->firstName;
    }
 
    public function getLastName() {
        return $this->lastName;
    }
}
 
class Question {
    private $author;
    private $question;
 
    public function __construct($question, Author $author) {
        $this->author = $author;
        $this->question = $question;
    }
 
    public function getAuthor() {
        return $this->author;
    }
 
    public function getQuestion() {
        return $this->question;
    }
}


echo '<pre>';

$quest1 = new Question( 'what is your name?', new Author('Gaurav', 'Pandey') );
$quest2 = new Question( 'what is your name?', new Author('Mamta', 'Pandey') );
$quest3 = new Question( 'what is your name?', new Author('Pawan', 'Pandey'));

print_r($quest1->getAuthor());
print_r($quest2->getAuthor());
print_r($quest3->getAuthor());

print_r($quest1->getQuestion());