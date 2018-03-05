<?php 
if(isset($_REQUEST['uploadinvalid'])) // button name
{
$file_name=$_FILES['file']['name'];    
$temp=$_FILES['file']['tmp_name'];
$type=$_FILES["file"]["type"];
$error=$_FILES["file"]["error"];
$size=$_FILES["file"]["size"];
if(is_uploaded_file($_FILES['file']['tmp_name']))
{
$server="localhost";
$user="crude";
$password="test1234";
$database="crude";
$cid=mysql_connect($server,$user,$password) or die("Try Again");
mysql_select_db($database,$cid);
 $handle = fopen($_FILES['file']['tmp_name'], "r");
  $fst="yes"; 
  $query="insert into username (name) values "; // predefine query
  $count=0; // counter for count how much values have been added 
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
    {
    $count++;
   $name=md5(trim($data[0]));
    if($fst=='yes') // check if fst== yes then don't use (,) comma
    {
    $fst="no";
    $query.="('$name')";  // append value with predefine query if first time append don't use  (,) comma
    }
    else
    $query.=",('$name')";   // append value and  use  (,) comma
    if($count==30000) //if counter==30000 query will execute         
   {
    mysql_query($query,$cid);
   $fst="yes";  //set fst=yes after execute query
    $query="";   //set query="" after execute query
    $count=0;     //set count=0 after execute query
   } 
    }
    mysql_query($query,$cid);  //execute query for remain values
    mysql_close($cid);
}
}
?>