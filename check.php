<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'quizdb');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">

    <div class="col-lg-6">

<?php

if(isset($_POST['submit'])){
    
    if(!empty($_POST['quizcheck'])){
        $count = count($_POST['quizcheck']);
        echo "Out of 5, you have attempted ".$count." questions"."<br>";

        $result = 0;
        $i = 1;

        $selected = $_POST['quizcheck'];

        $q = "select * from questions";
        $query = mysqli_query($con, $q);

        while($rows = mysqli_fetch_array($query)){
            $checked = $rows['ans_id'] == $selected["$i"];
            
            if($checked){
                $result++;
            }
            $i++;
        }

        echo "your total score is ".$result;
    }
}


$name = $_SESSION['username'];
$finalresult = "insert into users(username, totalques, correct_answer)
values('$name', '5', '$result')";
$queryresult = mysqli_query($con, $finalresult);

?>
</div>

<div class="m-auto d-block">
        <a href="logout.php" class="btn btn-primary">Logout</a>
        </div><br>

        </div>
</body>
</html>


