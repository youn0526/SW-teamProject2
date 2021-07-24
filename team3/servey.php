<?php
$host = 'localhost';
$user = 'edu';
$pw = '1234';
$dbName = 'mydb';
$mysqli = new mysqli($host, $user, $pw, $dbName);

$num=$_POST['number'];
$contents=$_POST['answer'];

if($contents==NULL )
{
    echo '<script> alert("내용을 적어주세요"); </script>';
    exit();
}

$mysqli=mysqli_connect("localhost", "edu", "1234", "mydb");

$insert=mysqli_query($mysqli,"INSERT INTO servey (Number, Contents, Date) 
VALUES ('$num', '$contents', NOW())");
if($insert){
    echo '<script> 
    alert("소중한 의견 감사합니다!");</script>';
    history.back();
} else {
    echo("쿼리오류" . mysqli_error($mysqli));
}
?>