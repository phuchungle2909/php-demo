<?php
session_start():
if(isset);
if(isset($_SESSION['username']) && 
isset($_SESSION['password'])){
    echo "";
    }
    else{
        header("Location: login.php");
    }
    $list_pro = array(
        array (
            "id" => 1,
            "name" => "Hưng1"
            "address" => "Mc1",
            "price_single_room" => "1.000.000",
            "price_double_room" => "1.5000.000", 
        ),
        array (
            "id" => 2,
            "name" => "Hưng2"
            "address" => "Mc2",
            "price_single_room" => "2.000.000",
            "price_double_room" => "2.5000.000", 
        ),
        array (
            "id" => 3,
            "name" => "Hưng3"
            "address" => "Mc3",
            "price_single_room" => "3.000.000",
            "price_double_room" => "3.5000.000", 
        ),
        array (
            "id" => 4,
            "name" => "Hưng4"
            "address" => "Mc4",
            "price_single_room" => "4.000.000",
            "price_double_room" => "4.5000.000", 
        ),
    );
    function get_pro(){
        global $list_pro;
        if(isset($_GET['key_search'])){
            $resault = [];
            foreach($list_pro as $pro){
                if((strpos($pro['name'],
                $_GET['key_search']))!==false){ 
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
        <title>Bảo vệ PhP</title>
    </head>
    <body>
        <h1>Danh Sách các khách sạn</h1>
        <form action="" method="GET"></form>
        <input type="text" name="key_search" placeholder = "Tìm kiếm khách sạn giá rẻ">
        <input type="submit" name="btn_search" value="Tìm kiếm"><br><br>
        </form>
        <table border ="1">
       <tr>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th>price_single_room</th>
        <th>price_double_room</th>   <td><?php echo $pro['id']?></td>
        <?php
        foreach(get_pro()as $pro){
            ?>
       </tr>
       <tr></tr>
       <td><?php echo $pro ['id']?></td>
       <td><?php echo $pro['name']?></td>
       <td><?php echo $pro['price_single_room']?></td>
       <td><?php echo $pro['price_single_room']?></td>
       <td><?php echo $pro['price_double_room']?></td>
       </tr>

       <?php
        }
        ?>
        </tr>
    </table> <br><br>
    <footer><a href="logout.php">Đăng xuất</a></footer>





    </body>
    </html>

            

                







