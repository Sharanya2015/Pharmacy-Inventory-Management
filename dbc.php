<?php
try{
$db= new PDO("mysql:host=localhost;dbname=pharmacy inventory","root","vertrigo");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
exit("ERROR!!");
}
?>
