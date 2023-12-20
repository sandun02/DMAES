</<?php 

  include('my.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Login</title>
  
<style>
header {
    
   background-size: 40% 100%;
    color: black;
    text-align: center;
    padding: 15px 0;
  font-size: 30px;
}
nav ul {
    list-style-type: none;
    padding: 0;
    text-align: right;
}
nav ul li {
    display: inline;
    margin-right: 20px;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}
.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}
.navbar a:hover {
  background: #f1f1f1;
  color: black;
}
.navbar a.active {
  background-color: #04AA6D;
  color: white;
}
.login-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    width: 300px;
    margin: 0 auto;
    margin-top: 150px;
}

h2 {
    margin-bottom: 20px;
}

label {
    display: block;
    text-align: left;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>
<header>
        <nav>
            <ul>
                <li>
                <div class="navbar">
                  <img src="Screenshot (681).png" id="logo" align="left" height="50px" width="120px">
                  <a href="contact.php">Contact</a>
                  <a href="dashboard.php">Dashboard</a>
                  <a href="login.php">Login</a>
                   <a href="register.php">Register</a>
                  <a href="service.php">Service</a>
                  <a href="home.php" class="active">Home</a>                  
                </div>
                </li>
            </ul>
        </nav>
</header>
    <div class="login-container">
        <h2>Login</h2>
        <form action="my.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
</body>
</html>