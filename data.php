<?php

include 'conntion.php';

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['text'];

$sql = "INSERT INTO `dream soft`( `name`, `email`, `number`,`message`)
 VALUES ('$name','$email','$number','$message')";

$result = mysqli_query($connect,$sql);

if($result)
{
    echo "data inserted";
}
else
{
    echo "data not inserted".mysqli_error($connect);
}

?>