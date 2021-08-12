<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Management System</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="custom.css">
            <div class="container">
            <div class="row">
            <div class="col-sm-8">
                <h2> Management System</h2>
                                </div>
                <div class="col-sm-4">
                    
                </div>
            </div>
        </div>
        <hr>
</head>

<body>
<div class="container">
            </div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="validation.php">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            User_Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="id" placeholder="Admin ID">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="pass" placeholder="Password">
                        </div>
                    </div>
                    
                    
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">Sign in</button><br>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                    Admin Login</div>
            </div>
        </div>
    </div>
</div>
<?php
//include('footer.php');
?>
</body>
</html>
