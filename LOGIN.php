<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$conn=new msqli_connect('localhost','root','test');
if($conn>connect_error){
	die('connection failed:' .$conn>connect_error);
}else
{$stmt=$conn>prepare("insert into kujamo(username,email,password)values(?,?,?)");
$stmt>bind_param("sssssi",$username,$email,$password);
$stmt->execute();
echo "registration successfully....";
 $stmt->close();
 $conn->close();


}



?>