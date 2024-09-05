<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username"> <br>
        <label for="password">Password</label>
        <input type="password" name="password"> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $input_username = $_POST["username"];
            $input_password = $_POST["password"];

            $correct_username = "Anubhav";
            $correct_password = "lodalelo";

            $hash = password_hash($correct_password, PASSWORD_DEFAULT);

            if(password_verify($correct_password, $hash) && $input_username === $correct_username){
                 header("Location: portfolio/html/index.html");
            }
            else{
                echo "Please enter correct id/password";
            }
        }
        else{
            echo "Pleaes fill the given field";
        }
    }
?>