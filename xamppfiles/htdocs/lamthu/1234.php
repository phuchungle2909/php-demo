<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    echo "";
}else{
    header("Location: login.php");
}
$list_pro = array(
    array(
        "id" => 1,
        "name" => "Hung1",
        "adress" => "Mc1"
        "single" => "100",
        "double" => 50,A
    ),
    array(
        "id" => 1,
        "name" => "Hung2",
        "adress" => "Mc2",
        "single" => "120",
        "double" => 51
    ),
    array(
        "id" => 1,
        "name" => "Hung3",
        "adress" => "Mc3",
        "single" => "130",
        "double" => 53
    ),
);
function get_pro(){
    global $list_pro;
    if(isset($_GET['key_search'])){
        $resault = [];
        foreach($list_pro as $pro){
            if((strpos($pro['name'], $_GET['key_search']))!==false){
                $resault[] = $pro;
            }
        }
        return $resault;
    }
    return $list_pro;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        footer{
            border: 1px solid red
            color: black
        }
    </style>
</head>
<body>
    <h1>Danh sách các khách san giá rẻ</h1>
    <form action="" method="GET">
    <input type="text" name="key_search" placeholder="Tìm kiếm khách sạn giá rẻ">
    <input type="submit" name="btn_search" value="Tìm kiếm"><br><br>
</form>
    <table border ="1">
       <tr>
        <th>ID</th>
        <th>name</th>
        <th>adress</th>
        <th>single</th>
        <th>double</th>
       <?php
       foreach(get_pro() as $pro){
       ?>
       <tr>
        <td><?php echo $pro['id']?></td>
        <td><?php echo $pro['name']?></td>
        <td><?php echo $pro['adress']?></td>
        <td><?php echo $pro['single']?></td>
        <td><?php echo $pro['double']?></td>
       </tr>
       <?php
       }
       ?>
       </tr>
    </table> <br><br>
    <footer>
        <a href="logout.php">Đăng xuất</a>
    </footer>
    
</body>
</html>

