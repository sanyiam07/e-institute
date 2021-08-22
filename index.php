<?php






if(isset($_POST['submit']))
{
    
 $person = $_POST['person'] ;

if($person == 'teacher')
{

    header("location:teacher/teacher-login.php");
}
else
{
    header("location:student/student-login.php");
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
                       
                        <!-- Form Start -->
                        <form  action="<?php $_SERVER['PHP_SELF'];?>" method ="POST">
                            <div class="form-group">
                                <label>Are you teacher or student ?</label><br><br>
                               
                                <input type="radio" id="person" name="person" value="teacher" required> <label>Teacher</label>
                            </div>
                            <div class="form-group">
                               
                                <input type="radio" id="person" name="person" value="student" required> <label>Student</label>

                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="submit" />
                        </form>
                        <!-- /Form  End -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
