<?php
$username = "root";
$password = "";
$host = "localhost";
$db = "dream soft";
$connect = mysqli_connect($host,$username,$password,$db);
if($connect)
{
    echo "connection successfully";

}else
{
    echo "not connected ".mysqli_error($connect);
}


?>