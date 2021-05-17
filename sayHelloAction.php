
<?php
session_start();
$server="localhost";
$username="root";
$password="";
$database="SAYHELLODB";
$conn=new mysqli($server,$username,$password);
if($conn->connect_error){
    die("Connection Error");
}
$sql="CREATE DATABASE SAYHELLODB";
$conn->query($sql);
 
$conn=new mysqli($server,$username,$password,$database);
$sql="CREATE TABLE Login (
    name varchar(255),
    email varchar(255),
    service varchar(255),
    budget varchar(255),
    message varchar(255))";

$conn->query($sql);
$name=$_POST["name"];
$email=$_POST["email"];
$service=$_POST["service"];
$budget=$_POST["budget"];
$messege=$_POST["messege"];
$sql="INSERT INTO Login VALUES('".$name."','".$email."','".$service."','".$budget."','".$messege."')";
$conn->query($sql);
if($conn){
    header("Location:sayHello.php");
}
?>