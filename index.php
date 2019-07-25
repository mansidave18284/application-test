<!DOCTYPE html>
<html>
<head>
<style>
table, th, td 
{
  border: 1px solid black;
}
</style>
<script type="text/javascript">

function myFunction(first_name,last_name,email) 
{
    //var id1 = $(this).data("first_name");
	 //return name;
	//document.write(id);
	
	//window.alert(first_name);
	//window.alert(email);
	alert( "Name:  " + first_name + " " + last_name + " \nEmail: " + email + ".");
	//document.getElementById("info_button").innerHTML = name;
}
</script>
</head>
<body>

<table>

<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
	<th>Email</th>
</tr>

<?php 
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

for($i=0;$i<count($people);$i++) 
{
  echo('<tr>');
  echo('<td>' . $people[$i]['id'] . '</td>');
  echo('<td>' . $people[$i]['first_name'] . '</td>');
  echo('<td>' . $people[$i]['last_name'] . '</td>');
  echo('<td>' . $people[$i]['email'] . '</td>');
 // echo('<td><Button id="info_button" onclick="myFunction(' . $people[$i]['id'].','.$people[$i]['first_name'] . ');">Alert</Button></td>');
  echo('<td><Button id="info_button" onclick="myFunction(\'' . $people[$i]['first_name'] .'\',\'' . $people[$i]['last_name'] .'\',\'' . $people[$i]['email'] .'\');">Alert</Button></td>');
  echo('</tr>');
} ?>
</table>
</body>
</html>