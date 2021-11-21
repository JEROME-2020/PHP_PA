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
            <div class="login_child py-5"> 
                 <br>
                 <div class="row">
                    <?php
                        $message = $_GET['Message'];

                        echo "<h2 class='bg-success p-2' style='--bs-bg-opacity: .5;''>" . $message . "</h1>";

                    ?>
                    <form method="post" action="../Function/shangePassword.php">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Put the code</label><br>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="code">
                            <br>
                            <label for="exampleInputEmail1" class="form-label">Put the new Password</label><br>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="newpassword">
                        </div>
                        <button type="submit" class="btn btn-primary mb-5" name="change">submit</button>
                    </form>
                </div>
            </div>
    </div>

</body>
</html>
 <?php
        include('layout/config.boostrap2.php');
 ?>