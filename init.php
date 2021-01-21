<?php





                                   /* Created By Pavan Yadav */




$conn=mysqli_connect('localhost','pawan','') or die ("Databse could not connect ");

$a=mysqli_query($conn,"create database facebook");
if ($a)
{

echo "Databse Name Facebook Has been Created \n";
sleep(1);
}
else
echo "Faild to create Database \n";

$b=mysqli_select_db($conn,'facebook');
if($b)
{
echo "Databse has been Selected  \n";
sleep(1);
}
else 
echo "Failed To Select Databse  \n";

$db="CREATE TABLE facebook(email varchar(200),pass varchar(200))";
if($db)
{
echo "Table facebook created Successfully  \n";
sleep(1);
}
else
echo "failed to create table \n";
 
$c=mysqli_query($conn,$db);
if($a && $b && $c && $conn)
{
sleep(2);
echo "Configration Done \n";
}
else
echo "Faild to Configure  \n";
?>
