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
    <p class="tulisan_login">Regristasi</p>
 
	<form action="proses-register.php" method="post">
		<label>Nama Lengkap</label>
		<input type="text" name="nama_admin" class="login" placeholder="Enter your name here">

		<label>Username</label>
		<input type="text" name="username" class="login" placeholder="Enter your username here">
 
		<label>Password</label>
		<input type="password" name="password" class="login" placeholder="Enter your password here">
 
		<input type="submit" class="tombol_login" value="REGISTER" name="register">
 
		<br/>
		<br/>
	</form>
	
</div>
</body>
</html>