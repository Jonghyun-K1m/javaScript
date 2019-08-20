<?php

$db_host = "localhost"; 

$db_user = "kjhyun424"; 

$db_passwd = "";

$db_name = "member"; 


// MySQL - DB 접속.

$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

if (mysqli_connect_errno()){

echo "MySQL 연결 오류: " . mysqli_connect_error();

exit;

} else {

echo "DB : \"$db_name\"에 접속 성공.<br/>";

}



// 문자셋 설정, utf8.

mysqli_set_charset($conn,"utf8"); 



// 테이블 쿼리 후 내용 출력.

$sql = "SELECT * FROM Person";

if ($result = mysqli_query($conn,$sql)){

echo "<table border='1' cellpadding='5'> <tr nowrap='' bgcolor='#e0e0e0'> 

<th>PID</th> 

<th>Name</th> 

<th>Address</th> 

<th>Age</th>

</tr>";



while($row = mysqli_fetch_array($result)){

echo "<tr>";

echo "<td nowrap=''>" . $row['PID'] . "</td>";

echo "<td nowrap='' bgcolor='#f4f0fa'>" . $row['Name'] . "</td>";

echo "<td nowrap=''>" . $row['Address'] . "</td>";

echo "<td nowrap='' bgcolor='#f4f0fa'>" . $row['Age'] . "</td>";

echo "</tr>";

} 

echo "</table>";



mysqli_close($conn);



} else {

echo "테이블 쿼리 오류: " . mysqli_error($conn);

exit;

}

?>