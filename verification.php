<?php
session_start();
$user_id=$_SESSION['id'];

$dbHost1     = "localhost";
$dbUsername1 = "root";
$dbPassword1 = "";
$dbName1     = "atreyashield";

// // Create database connection
$db1 = mysqli_connect($dbHost1, $dbUsername1, $dbPassword1, $dbName1);

$uid= $_GET["userID"];
$key= $_GET['key'];


$sql=  $db1->prepare("SELECT * FROM files WHERE owner_id='$user_id' and `id`='$uid'");
$sql->execute();
$result0 = $sql->get_result();
$r = $result0->fetch_array(MYSQLI_ASSOC);
$pname= $r['image'];
$pkey= $r['privateKey'];
$id= $r['id'];
if ($key == $pkey){
    include_once('aes-dec.php');
    decryptFile('uploads/'.$pname, 'upload/decrypted_'.$pname, '*&@zxor)#^!+=]'.$pkey.')#^!+=]*&@zxor');
    //echo ("success");
    echo "<a href= 'upload/decrypted_".$pname."' id='link' download>Download File</a>";
}
else{
    echo ("Hello2");
}

?>