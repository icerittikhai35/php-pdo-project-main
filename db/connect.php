<?php 

$host="localhost";
$username="root";
$password="";
$db="employeesdb";
$dns="mysql:host=$host;dbname=$db;charset=utf8";

try{
    $pdo = new PDO($dns,$username,$password);
}catch(PDOException $e){
    echo $e->getMessage();
}
require_once "db/controller.php";
require_once "db/user.php";
$controller = new Controller($pdo);
$user = new User($pdo);
$admin = new User($pdo);

$user->insertUser('admin','12345');
$admin->insertUser('admin2','12345');


?>