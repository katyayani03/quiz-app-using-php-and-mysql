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
    <title>Qizzler | <?php echo $_SESSION['username'];?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <br><h1 class="text-center text-primary">WEB DEVELOPMENT QUIZ</h1><br>
        <h2 class="text-center text-primary">Welcome <?php echo $_SESSION['username'];?> </h2>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 m-auto d-block">

            <div class="card">
                <h3 class="text-center card-header">Welcome <?php echo $_SESSION['username'];?>, Select one answer</h3>
            </div><br>

            <!--when submit is clicked it triggers check.php-->
            <form action="check.php" method="post">

                <?php
                    /*for each question with qid = 1 to 5*/
                    for($i = 1; $i < 6; $i++){

                    $q = "select * from questions where qid= $i";
                    $query = mysqli_query($con, $q);

                        while($rows = mysqli_fetch_array($query)){
                        ?> 

                        <div class="card">
                             <!--print question-->
                             <h4 class="card-header"> <?php echo $rows['question'] ?></h4>

                             <?php
                                $q = "select * from answers where ans_id= $i";
                                $query = mysqli_query($con, $q);

                                while($rows = mysqli_fetch_array($query)){
                                ?> 

                                <div class="card-body">
                                    <!--print the question's options(i.e ans_id=$i) and take the selected option's aid as input-->
                                    <input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid'];?>">
                                    <?php echo $rows['answer']; ?>
                                </div>
                            <?php
                                }
                        }
                    }
                ?> 

                <input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
            </form>
                      </div> 
        </div>  
        
        <br><br>
        
        <!--logout button-->
        <div class="m-auto d-block">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div><br>
    
    </div>
    
</body>
</html>