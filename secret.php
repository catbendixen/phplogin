<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    echo ("<h3>You re not logged in<h3>");
    echo '<a href="index.php">Log in or Register</a>';
    }else
    {
        echo ("<h3>Welcome to my Nightmare<h3><br>"); 
        echo '<img src="frustration.jpg">'; 
        echo '<a href="logout.php">Logout</a>';
    }
?>
<html>
<head>
<meta charset="utf-8">
<title>Secret Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
</head>
<body>
</body>
</html>