<?php

namespace static_class;

class User
{
    public $name;
    public static $age;
    public static $minimumPasswordLength = 6;
    
    public function Describe()
    {
        return $this->name . " is " . self::$age . " years old";
    }
    
    public static function ValidatePassword($password)
    {
        if(strlen($password) >= self::$minimumPasswordLength)
            return 'Right password';
        else
            return 'wrong password';
    }

}


$user = new User;
$user->name = 'Pawan';
User::$age = 27;
echo $user->Describe();
echo User::ValidatePassword('pswd');