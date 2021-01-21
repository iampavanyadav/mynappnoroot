<?php
                                                  /* Creted By Pavan Yadav */

echo "
┌══════════════════════════════════════════════════════════════┐
█                                                              █
█                    Welcome To Mynap TooL                     █
█                                    Created By Pavan Yadav    █
└══════════════════════════════════════════════════════════════┘     \n ";


echo "Checking Database Connection....\n";

sleep(1);
if($conn=mysqli_connect('localhost','root',''))
{
echo " Database Has Been Connected \n";
sleep(1);
}
else
{
echo " Failed To Connect Database \n ";
}
echo " Selecting Database \n";
sleep(1);
if($sql=mysqli_select_db($conn,'facebook'))
{
echo " Databse Has Been Selected \n";
sleep(1);
}
else
{
echo " Database Facebook Not found run python3 init.py \n";
}

$select="SELECT *FROM FACEBOOK";
$value=mysqli_query($conn,$select);
echo $value;

echo "--------------------------------\n"; 

$sqli= 'SELECT *from facebook';
$retval = mysqli_query($conn,$sqli);
if(! $retval ) {
die('Could not get data: ' . mysqli_error());
}
while($row = mysqli_fetch_array($retval)) {
echo "Username :{$row[0]} \n".
"Password :{$row[1]} \n".
"--------------------------------\n";
}
mysqli_free_result($retval);
echo "Data Fetching Completed\n"

?>
