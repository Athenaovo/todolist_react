<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2019/7/9
 * Time: 16:50
 */
include "db.php";

header('Content-type: application/json; charset=utf-8');

$id = $_POST['id'];

$sql = "select * from items where id='$id'";
$results = mysqli_query($conn, $sql);
if(mysqli_num_rows($results) >0){
    $sql = "delete from items where id='". $id."'";
    if(mysqli_query($conn, $sql)){
        $msg['msg'] = $id." Data successfully deleted from MYSQL database!";
        $json = json_encode($msg);
    }
    else{
        echo "error deleting data";

    }

}
else{
    $msg['error']=" your data with id ".$id."has already deleted";
    $json = json_encode($msg);
}

echo $json;
$conn->close();
?>