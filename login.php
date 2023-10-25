<?php
$name=$_POST['name'];
$name2=$_POST['name2'];
$pass=$_POST['pass'];
$conn=new mysqli('localhost','root','','login');
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into reg(name,mail,pass) values(?,?,?)");
    $stmt->bind_param("ssi",$name,$name2,$pass);
    $stmt->execute();
    echo "successful";
    $stmt->close();
    $conn->close();
}




?>