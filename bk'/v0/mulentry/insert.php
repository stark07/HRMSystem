<?php
//insert.php
$connect = mysqli_connect("localhost", "crude", "test1234", "crude");
if(isset($_POST["id"]))
{
 $id = $_POST["id"];
 $name = $_POST["name"];
 $address = $_POST["address"];
 $salary = $_POST["salary"];
 $query = '';
 for($count = 0; $count<count($id); $count++)
 {
  $id_clean = mysqli_real_escape_string($connect, $id[$count]);
  $name_clean = mysqli_real_escape_string($connect, $name[$count]);
  $address_clean = mysqli_real_escape_string($connect, $address[$count]);
  $salary_clean = mysqli_real_escape_string($connect, $salary[$count]);
  if($id_clean != '' && $name_clean != '' && $address_clean != '' && $salary_clean != '')
  {
   $query .= '
   INSERT INTO employees (id, name, address, salary) 
   VALUES("'.$id_clean.'", "'.$name_clean.'", "'.$address_clean.'", "'.$salary_clean.'"); 
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Item Data Inserted';
  }
  else
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>
