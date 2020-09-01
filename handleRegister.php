<?php 
session_start();

require_once 'classes/validation/validator.php';
require_once 'classes/guest.php';


use validation\Validator;


if(isset($_POST['submit']))
{
    $data =[];
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['password'] = $_POST['password'];
    $data['phone'] = $_POST['phone'];
    $data['address'] = $_POST['address'];

    //validation 
    $v = new Validator;
    $v->rules('name',$data['name'] , ['required','string']);
    $v->rules('email',$data['email'] , ['required','email','max:100']);
    $v->rules('password',$data['password'], ['required','string']);
    $v->rules('phone',$data['phone'], ['required','numeric']);
    $v->rules('address',$data['address'], ['required','string','max:200']);


    $errors = $v->errors;

    //if data is valid
    if($errors == [])
    {
        $data['password'] = sha1($data['password']);
        $guest =new Guest;
        $result = $guest->attempt($data);

        // if stored successfully
        if($result == true)
        {
            $_SESSION['id'] = $result['id'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['is_register']=true ;
            header('location:index.php');
        } else
        {
            $_SESSION['errors'] = [' Your credentials are not correct'];
            header('location:register.php');
            
        }
    }else
    {
        $_SESSION['errors'] =$errors;
        header('location:register.php');
    }

}
