<?php

$db_host = "localhost"; 

$db_user = "kjhyun424"; 

$db_passwd =  "";

$db_name = "member"; 

$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);



if (mysqli_connect_errno($conn)) {

echo " fail: " . mysqli_connect_error();

} else {

echo "success";

}

?>