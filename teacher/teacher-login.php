<?php
if(isset($_POST['login']))
{   
    $pass = "teacher";
    $Tpass = $_POST['tpass'];
    
    if($pass == $Tpass)
    {
       header('location:quizes.php');
    }
    else
    {
        echo "you entered wrong password . Try agains";
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
                        <h3 class="heading">&nbsp; &nbsp; &nbsp; &nbsp;Teacher Login </h3>
                        <!-- Form Start -->
                        <form  action="" method ="POST">
                            <div class="form-group">
                                <label>Name Of Teacher</label>
                                <input type="text" name="sname" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Teacher Id</label>
                                <input type="number" name="Roll-no" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Teacher Password</label>
                                <input type="password" name="tpass" class="form-control" placeholder="" required>
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
