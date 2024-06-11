<?php
include_once "NewsQuery.php";

$NewsQuery= new NewsQuery();

echo "Chi tiet san pham <br/>";
$new01 = $NewsQuery ->all();
var_dump($new01);
echo "<br/>"


?>
