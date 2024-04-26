<!--the first page that will be visible to users-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzler | Login </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container">
    <br><h1 class="text-center text-primary">Welcome to Quizzler!!!</h1><br>
    <div class="row">
        <div class="col-lg-6">
            
        <!-- a login form with 2 inputs username and password, when submit button is pressed, it will trigger validation.php-->
            <h2 class="text-center">Login</h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            
        </div>

        <!-- a signin form with 2 inputs username and password, when submit button is pressed, it will trigger registeration.php-->
        <div class="col-lg-6">
            <h2 class="text-center">Signin</h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Signin</button>
            </form>
        
        </div>

    </div>
</div>


</body>
</html>