<?php

session_start();

$con = mysqli_connect('localhost', 'root');
if($con){
    echo"connection succesful";
}else{
    echo"no connection";
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);


/*if user exist go to hom.php*/
if($num == 1){

    $_SESSION['username'] = $name;
    header('location:home.php');
}/*else stay in login.php*/
else{
    header('location:login.php');
}


?>