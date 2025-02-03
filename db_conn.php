 

<?php
$sName ="localhost";

$uName="root";

$password="";

$db_name="book_shelf_db";
/**
 * creating database connection
 * using THE PHP Dat Objects(PDO)
 **/
try
{
    $conn= new PDO("mysql:host=$sName;port=3307;dbname=$db_name",$uName,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
     
}catch(PDOException $e)
{
    echo"Connection falied :". $e->getMessage();
}
?>
