<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body_login">

<div class="kotak_login">
    <p class="tulisan_login">Login Petugas</p>
    <p class="profile_login"><img src="aset/profilelogo.png" alt="error" width ="50" height="50"></p>
 
	<form action="proses-login.php" method="post">
		<label>Username</label>
		<input type="text" name="username" class="login" placeholder="Enter your username here">
 
		<label>Password</label>
		<input type="password" name="password" class="login" placeholder="Enter your password here">
 
		<input type="submit" class="tombol_login" value="login">
				<br>	
				<br>	
		<center><a href="register.php">Buat akun</a></center>

	</form>
	
</div>
</body>
</html>