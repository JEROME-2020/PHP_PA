<!DOCTYPE html>
<html>
<head>
	<title>Forgot Passord</title>
	 <?php
        include('layout/config.boostrap1.php');
    ?>
</head>
<body>

	<div class="container">
        <h1 class="header_title">Reset your Password</h1><br>
        <a href="index.php" class="btn btn-success btn-lg mb-5">Go to Login</a>
            <div class="login_child py-5"> 
                 <br>
                 <div class="row">
                    <form method="post" action="../Function/forgotRecover.php">
                        <h1>Send Email for varification</h1>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5" name="forgot">SEND</button>
                    </form>
                </div>
            </div>
    </div>

</body>
</html>
 <?php
        include('layout/config.boostrap2.php');
 ?>