<?php
$db=new PDO('mysql:host=remotemysql.com;dbname=YU64QcNNT8','YU64QcNNT8','OyRpJiiinx');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if ($db){
    echo"";

}
else{
    echo "Failed to connect to server";
}
?>