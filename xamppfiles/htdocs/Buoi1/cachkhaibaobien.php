<?php
    // viết code logic trong cặp thẻ php
    $a = 5; // a là số nguyên;
    $b = 5.5; // b là số thực
    $c = "fpoly"; // c là chuỗi
    $d = true; // d là boolen
    echo $c . $b . $d;

    // mảng
    $mang = [5, 6, 7, 8, 9];
    var_dump($mang);
    // hiển thị các số chẵn
    // duyeettj phần tử ( vòng lặp)
for($i = 0; $i < count($mang); $i++){
    if($mang[$i] % 2 == 0){
        echo $mang[$i] . " là số chẵn <br>";
        echo " là số thứ " . ($i +1) . " trong mảng <br>";
    }
}
// hiển thị các số chia hết cho 3
foreach($mang as $so ) {
    if($so % 3 == 0){
        echo $so . " la so chia het cho 3 <br>";
    }
}


// Mảng liên hợp
$manglh = ["A" => 5, "B" => 6, "c" =>7,"D" => 8,"E"=>9];
// echo $manglh[1];// Mảng liên họp không dùng được index
echo $manglh[""];
foreach ($manglh as $k => $v){
    echo $k. "=> "$v . "<br>";

}
$mangcolor = [
    "red" => "mau do",
    "green" => "mau xanh",
    "pink" => "mau hong",
    "purdle" => "mau tim",

];
?>
<table border="1">
    <tr>
        <td bgcolor="red">mau do</td>
        <td bgcolor="pink">mau hong</td>
    </tr>

</table>