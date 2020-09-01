<?php

require_once 'mysql.php';


class Guest extends MySql
{
    public function attempt(array $data)
    {
        $data['name']= mysqli_real_escape_string($this->connect(),$data['name']) ;
        $data['email']= mysqli_real_escape_string($this->connect(),$data['email']) ;
        $data['address']= mysqli_real_escape_string($this->connect(),$data['address']) ;

        $query = "INSERT INTO admins (`name`,`email`,`password` ,`phone`,`address`)
        VALUE ('{$data['name']}' , '{$data['email']}' ,'{$data['password']}' , '{$data['phone']}' , '{$data['address']}')";


        $result = $this->connect()->query($query);
        
        if($result == true)
        {
            return true;
        }
        return false;
    }
}


?>