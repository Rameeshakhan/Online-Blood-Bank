<?php
$db=new PDO('mysql:host=remotemysql.com;dbname=sql6438346','sql6438346','XKVHzVwbwZ');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if ($db){
    echo"";

}
else{
    echo "Failed to connect to server";
}
?>
