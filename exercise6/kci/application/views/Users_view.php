<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "Hi! I'm Kim ibarra.";
	}
	function myFunction2() {
    document.getElementById("demo").innerHTML = "I lived at BCDA, Tgauig City.";
	}
	function myFunction3() {
    document.getElementById("demo").innerHTML = "I'm 18 years old.";
	}
	function myFunction4() {
    document.getElementById("demo").innerHTML = "I love playing video games and watching movies.";
	}
	function myFunction5() {
    document.getElementById("demo").innerHTML = "I love burgers.";
	}
</script>
<style>

.error {color: #FF0000;}

h1 {
	font-size: 30px;
	}

p.serif {
	font-famili: "Cursive", Times, seif;
	}
	
p {
	font-size: 20px;
	color: red;
	}
	


body {
background-image: url('http://127.0.0.1/exercise6/kci/uploads/bg.jpg');
}

a {
	color: red;
	}
	
table {

    width: 100%;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 3px solid #000000;
	font-size: 20px;
}
</style>

<script type="text/javascript">
function show_confirm(act,gotoid)
{
if(act=="Users_edit")
var r=confirm("Do you really want to edit?");
else
var r=confirm("Do you really want to delete?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
}
}
</script>

</head>

<body>
<h1>WEBPROG</h1>
<p> My Home Page.</p>


<table>
  <tr>
    <th>First name</th>
    <th>Nickname</th>
    <th>Interest</th>
	<th>Favorite Website</th>
  </tr>
  <tr>
    <td>Kim C. Ibarra</td>
    <td>Kim/Harvey</td>
	<td><img src="http://127.0.0.1/exercise6/kci/uploads/computer.png" alt="computer" style="width:150px;height:100px;"></td>
    <td><p><b><a href="www.youtube.com" target="_blank">Youtube</a></b></p></td>
  </tr>
</table>


<h1>Want to know more about me?.</h1>
<h2> Click the buttons below<h2>
<p id="demo"></p>


<table>
  <tr>
    <th>My full name?</th>
    <th>Where do I live?</th>
    <th>My age?</th>
	<th>Interests</th>
	<th>My most favorite food?</th>
  </tr>
  <tr>
    <td><button type="button" onclick="myFunction()">Click</button></td>
    <td><button type="button" onclick="myFunction2()">Click</button></td>
	<td><button type="button" onclick="myFunction3()">Click</button></td>
    <td><button type="button" onclick="myFunction4()">Click</button></td>
	<td><button type="button" onclick="myFunction5()">Click</button></td>
  </tr>
</table>
<div id="body">
	<div id="content">
		<table align="center">
			<tr>
				<td colspan="9" align="center"> <a href="<?php echo base_url();?>index.php/users/add_form" style="margin-left: 625px;">Add data here.</a></td>
			</tr>
			<tr style="text-decoration: underline;">
				<th>Fullname</th>
				<th>Nickname</th>
				<th>Email Address</th>
				<th>Home Address</th>
				<th>Gender</th>
				<th>Phone/Telephone Number</th>
				<th colspan="2">Operations</th>
			</tr>
			
		<?php foreach ($user_list as $u_key){ ?>

			<tr>

				<td><?php echo $u_key->name; ?></td>

				<td><?php echo $u_key->nickname; ?></td>

				<td><?php echo $u_key->email; ?></td>

				<td><?php echo $u_key->address; ?></td>
				
				<td><?php echo $u_key->gender; ?></td>
				
				<td><?php echo $u_key->cp_number; ?></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('Users_edit',<?php echo $u_key->user_id;?>)">EDIT</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)">DELETE</a></td>

			</tr>

<?php }?>
			
			
		</table>
	</div>
</div>

</body>

</html>	