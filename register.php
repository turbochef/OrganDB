<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysql_query($query);
        if($result){
            $msg = "User Created Successfully.";
        }
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <!-- Form for logging in the users -->
<div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-heart-empty"></span>OrganDonation</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.html">login</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

<div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>



<div class="panel panel-default">
            <div class="panel-heading">
                Register
            </div>
            <div class="panel-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" id="username" type="text" name="username" placeholder="username"/>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" class="form-control" type="email" name="email" placeholder="email" />
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input id="password" class="form-control" type="password" name="password" placeholder="password" />
                    </div>

                    <a class="btn btn-default" href="login.php">Login</a>
    <input class="btn btn-default" type="submit" name="submit" value="Register" />
                    
                </form>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</div>
</body>
</html>