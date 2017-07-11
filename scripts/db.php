<?php

// id int(11) primary key auto increment
// name vachar(100) not null
// email varchar(50) unique not null
// password varchar(255) not null
// created_at int(11) not null
// updated_at int(11) not null

$conn=mysqli_connect('localhost','root','toor','php_oop');

$query="CREATE TABLE users(

id int(11) primary key auto_increment,
name varchar(100) not null,
email varchar(50) unique not null,
password varchar(255) not null,
created_at int(11) not null,
updated_at int(11) not null

)";


if(mysqli_query($conn,$query))

echo 'ok';

else

echo 'damn';