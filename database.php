 <?php

#Database declaration and connections.
$server_name="localhost";
$username="root";
$password="";
$dbname="party";

function Insert_database($User_name,$phone,$city,$facebook,$email){

global $server_name,$username,$password,$dbname;

$conn =new mysqli($server_name,$username,$password, $dbname);
$sql= "INSERT INTO people (Fullname, Cellphone,City,Facebook, Email) VALUES ('$User_name','$phone','$city','$facebook','$email')";
#connection part
if($conn->connect_error)
{
	die("Connection Failer" . $conn->connect_error);
}

if($conn->query($sql)===TRUE)
{
	echo "New record created succesfully";
}
else
{
	echo"Error:" . $sql ."<br>" . $conn->error;
}

$conn->close();
}


?>