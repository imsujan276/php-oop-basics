<?php 

    require_once('../include/show_error.php'); 

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST))
{

    require_once('../class/user.php');


    $u=new User();

    $u->name     = $_POST['name'];
    $u->email    = $_POST['email'];
    $u->password = $_POST['password'];

    $u->validate();

    if($u->register())
    {
        $msg='success';
    }
    else
    {
        $msg='failed'; 
    }

    header('Location: ../register.php?status='.$msg);
}