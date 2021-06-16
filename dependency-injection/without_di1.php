<?php

// http://stackoverflow.com/questions/2832017/what-is-the-difference-between-loose-coupling-and-tight-coupling-in-the-object-o

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
    public function __construct($question, $authorFirstName, $authorLastName) {
        $this->author = new Author($authorFirstName, $authorLastName);
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

$quest = new Question('what is your name?', 'pawan', 'pandey');
$author = $quest->getAuthor();
print_r($author);

$question = $quest->getQuestion();
print_r($question);die;