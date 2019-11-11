<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2019/7/9
 * Time: 16:50
 */
include "db.php";

$sql = "SELECT * FROM items";

$result = $conn->query($sql);

if($result->num_rows >0){
    while($row[] = $result->fetch_assoc()) {

        $tem = $row;

        $json = json_encode($tem);
    }
}
else{
    echo "No result found";
}
echo $json;
$conn->close();
?>