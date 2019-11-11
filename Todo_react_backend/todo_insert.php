<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2019/7/16
 * Time: 12:56
 */
include "db.php";

$done = $_POST['done'];
$value = $_POST['value'];

$sql = "insert into items(done,value) values('$done', '$value')";
if(mysqli_query($conn, $sql)) {
    $msg['suc_msg'] = "Data successfully deleted from MYSQL database!";
    $json = json_encode($msg);
}
else{
    echo "No result found";
}
echo $json;
$conn->close();
?>