<?php
if(isset($_POST['login']))
{   
    $pass = "student";
    $Spass = $_POST['spass'];
    
    if($pass == $Spass)
    {
       header('location:quizer.php');
    }
    else
    {
        echo "You entered wrong password.Try again";
    }
}
?>
<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="css/style.css">
        
    </head>

    <body>
        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-3">
                    <h1>WELCOME TO &nbsp; NAV_INSTITUTE</h1><br>
                        <h3 class="heading">&nbsp; &nbsp; &nbsp; &nbsp;Student Login </h3>
                        <!-- Form Start -->
                        <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                            <div class="form-group">
                                <label>Name Of Student</label>
                                <input type="text" name="sname" class="form-control" placeholder="" required>
                            </div>
                        
                            
                            <div class="form-group">
                                <label>Student Roll No.</label>
                                <input type="number" name="Roll-no" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Student Password</label>
                                <input type="password" name="spass" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-primary" value="login" />
                        </form>
                        <!-- /Form  End -->
                    </div>
                </div>
            </div>
        </div>
        

    </body>
</html>
