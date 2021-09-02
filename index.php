<?php 
error_reporting(0);
session_start(); 
$username=$_SESSION['username'];
$password=$_SESSION['password'];
echo "selamat datang " . $username . "  berpassword " . $password;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="proses.php" method="POST">
        <style>
                ul {
                    width: 50%;
                    height: 50%;
                }
                li {
                    text-decoration: none;
                    list-style-type: none;
                }
        </style>
        <ul>
            
            <li>
                <label for="username">Masukan Username</label>
                <input type="textarea" name="username" placeholder="Username" required>
            </li>
            <li>
                <label for="password">Masukan Password</label>
                <input type="password" name="password" id="password" placeholder="password" required>
            </li>
            <li><button type="submit">Login</button></li>
            <div class="col-4">
					<h2></h2>
					<h4><a href="loguot.php">Log Out</a></h4>
				</div>

        </ul>
    </form>
    
    
</body>
</html>