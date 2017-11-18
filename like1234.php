<?php 



$servername="localhost";
$dbname="project_website";
$username="root";
$password="";

 $conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	echo"error1";
}
$sql1="UPDATE products SET prolike=prolike+'1' WHERE id='1' ";
$sql="SELECT prolike FROM products WHERE id='1'";
$res=$conn->query($sql1);
$result=$conn->query($sql);
if($result->num_rows>0){
while($row = $result->fetch_assoc()){
echo"".$row['prolike'];

}}


$conn->close();
?>