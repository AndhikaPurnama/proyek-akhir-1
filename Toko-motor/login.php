<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body id="bg-login">
	
    <div class="box-login">
		<form action="proses.php" method="post">
            <h1>Login</h1>
            <hr>
            <p>Speed shop</p>
			<label>Username</label>
			<input type="text" name="username" class="input-control" placeholder="Username ..">
 
			<label>Password</label>
			<input type="password" name="password" class="input-control" placeholder="Password ..">
 
			<input type="submit" class="button-login" value="LOGIN">
            <p>
                    <a href="register.php"></a>
            </p>
		</form>
       
	</div>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo '<script>alert("Username atau password Anda salah!")</script>';
		}
	}   
	?>
 
</body>
</html>
