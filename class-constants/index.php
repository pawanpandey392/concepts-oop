<?php

namespace class_constants;

class User
{
    const DefaultUsername = "John Doe";
    const MinimumPasswordLength = 6;
}

echo "The default username is " . User::DefaultUsername . '<br>';
echo "The minimum password length is " . User::MinimumPasswordLength;
?>