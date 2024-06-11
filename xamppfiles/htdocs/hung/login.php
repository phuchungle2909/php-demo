<?php
    $list_user = array(
        array(
            'user' => 'admin',
            'pass' => '123456',
        ),
        array(
            'user' => 'halt78',
            'pass' => 'ha123',
        ),
        array(
            'user' => 'my05',
            'pass' => '12345',
        ),
        );
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    header("Location:1234.php");
    exit();
}else{
    if(isset($_POST['btn_login'])){
        foreach($list_user as $user){
            if($_POST['user'] == $user['user'] && $_POST['pass'] == $user['pass']){
            $_SESSION['username']=$_POST['user'];
            $_SESSION['password']=$_POST['pass'];
            header("Location: 1234.php");
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ĐĂNG NHẬP</h1>
    <form action="" method="POST">
        <label for="">Username:</label>
        <input type="text" name="user"><br><br>
        <label for="">Password:</label>
        <input type="password" name="pass"><br><br>
        <input type="submit" name="btn_login" value="đăng nhập">
    </form>
</body>
</html>
