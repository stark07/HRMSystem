<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Multiple Inline Insert into Mysql using Ajax JQuery in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container">
   <br />
   <h2 align="center">Multiple Inline Insert into Mysql using Ajax JQuery in PHP</h2>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered" id="crud_table">
     <tr>
      <th width="6.7%">ID</th>
      <th width="25%">Name</th>
      <th width="25%">Address</th>
      <th width="5%">Salary</th>
      <th width="5%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="id"></td>
      <td contenteditable="true" class="name"></td>
      <td contenteditable="true" class="address"></td>
      <td contenteditable="true" class="salary"></td>
      <td></td>
     </tr>
    </table>
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
    </div>
    <div align="center">
     <button type="button" name="save" id="save" class="btn btn-info">Save</button>
    </div>
    <br />
    <div id="inserted_item_data"></div>
   </div>
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='id'></td>";
   html_code += "<td contenteditable='true' class='name'></td>";
   html_code += "<td contenteditable='true' class='address'></td>";
   html_code += "<td contenteditable='true' class='salary' ></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
 $('#save').click(function(){
  var id = [];
  var name = [];
  var address = [];
  var salary = [];
  $('.id').each(function(){
   id.push($(this).text());
  });
  $('.name').each(function(){
   name.push($(this).text());
  });
  $('.address').each(function(){
   address.push($(this).text());
  });
  $('.salary').each(function(){
   salary.push($(this).text());
  });
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:{id:id, name:name, address:address, salary:salary},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
    fetch_item_data();
   }
  });
 });
 
 function fetch_item_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }
 fetch_item_data();
 
});
</script>
<a href="../database.php">Click Here to Update Entry</a
