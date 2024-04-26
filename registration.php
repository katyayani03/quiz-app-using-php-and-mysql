<?php

session_start();
header('location:login.php');


$con = mysqli_connect('localhost', 'root');
if($con){
    echo"connection succesful";
}else{
    echo"no connection";
}

/*connect to database "sessionpractical"*/
mysqli_select_db($con, 'sessionpractical');

/* 2 var for inputs passed into columns "user" and "password"*/
$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$pass'";

/*pass the query to check whether user with username $name is already in the table or not*/
$result = mysqli_query($con, $q);

/*the no. of rows with username and password with $name and $pass*/
$num = mysqli_num_rows($result);

/*if it is 1 user already exists*/
if($num == 1){
    echo"duplicate data";
}/*if not insert data into the table*/
else{
    $qy = "insert into signin(name, password) values('$name', '$pass')";
    mysqli_query($con, $qy);
}


?>