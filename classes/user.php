<?php

class User {
    //properties

    var $userName ;
    var $email;
    var $password;
    var $is_admin = true;

    //methods

    function __construct($uname,$em,$pass)
    {
        $this->userName =$uname;
        $this->email=$em;
        $this->password=$pass;

        echo "hello $this->userName";
    }
    function greet()
    {
        echo "Hello $this->userName";
    }

    function updatePassword($new_pass)
    {
        $this->password = $new_pass;
    }

    function makeAdmin()
    {
        $this->is_admin = true;
    }

    function removeAdmin()
    {
        $this->is_admin = false;
    }

    function __destruct()
    {
        echo "<br> good bye $this->userName <br>";
    }
}

/*$kareem = new user;
$kareem->userName ='kareem fouad';
$kareem->email='kareem@route.com';
$kareem->password='123456';

echo $kareem->password .'<br>';
$kareem->password='789';
echo $kareem->password .'<br>';

$kareem->greet();
$kareem->makeAdmin();
echo'<br>';
print_r($kareem);
echo'<br>';
$ahmed =new User;
$ahmed->userName='ahmed bahnasy';
$ahmed->removeAdmin();

print_r($ahmed);*/
?>