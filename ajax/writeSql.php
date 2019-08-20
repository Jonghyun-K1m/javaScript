<?php

$db_host = "localhost"; 

$db_user = "kjhyun424"; 

$db_passwd =  "";

$db_name = "kjhyun424";  



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



// 테이블에 값 쓰기.
$sql ="USE member";
$inputname=$_POST["user_name"];
$inputid=$_POST["user_id"];
$inputpwd=$_POST["user_pwd"];
$inputemail=$_POST["user_email"];

$sql = "SELECT * FROM member WHERE id=\"$inputid\" ";
$result = mysqli_query($conn,$sql);
while( $result_row = mysqli_fetch_array( $result ) ) {  //있으면 짤
    //if($inputid==$result_row['id'])
    exit;
   // echo '<p>' . $result_row['id'] . '</p>';
}


    $sql = "INSERT INTO member (id, name, password, email)
    VALUES (\"$inputid\",\"$inputname\",\"$inputpwd\",\"$inputemail\")";
    if (mysqli_query($conn,$sql)){

        echo "테이블에 값 쓰기 완료:";
        
        //echo "테이블에 값 쓰기 완료: $sql<br/>";
        
        } else {
        
        echo "테이블에 값 쓰기 오류: " . mysqli_error($conn);
        
        }

mysqli_close($conn);

?>