<!-- <?php
// $pdo = new PDO('mysql:host=localhost;port=3306;dbname=inventory','root', '');
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?> -->
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="inventory";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

?>