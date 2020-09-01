<?php 
session_start();

require_once 'classes/Admin.php';
require_once 'classes/validation/validator.php';

use validation\Validator;

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    //validation 

    $v = new Validator;
    $v->rules('email',$email , ['required','email','max:100']);
    $v->rules('password',$password, ['required','string']);

    $errors = $v->errors;

    //if data is valid
    if($errors == [])
    {
        $admin =new Admin;
        $result = $admin->attempt($email , sha1($password) , $username); //

        // if stored successfully
        if($result !== NULL)
        {
            $_SESSION['id'] = $result['id'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['is_login']=true;
            header('location:index.php');
        } else
        {
            $_SESSION['errors'] = [' Your are not Admin , please register first'];
            header('location:register.php');
            
        }
    }else
    {
        $_SESSION['errors'] =$errors;
        header('location:register.php');
    }

}?>
