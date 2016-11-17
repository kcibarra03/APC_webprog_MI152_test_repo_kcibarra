<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($link, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "My full name is John Dave Baylon Salcedo.";
	}
	function myFunction2() {
    document.getElementById("demo").innerHTML = "I lived at Villamor Air Base Pasay City.";
	}
	function myFunction3() {
    document.getElementById("demo").innerHTML = "I am 18 years old.";
	}
	function myFunction4() {
    document.getElementById("demo").innerHTML = "I used to collect Shoes especially Vans and I play different genre of games.";
	}
	function myFunction5() {
    document.getElementById("demo").innerHTML = "Anything except vegetables.";
	}
</script>
<style>

.error {color: #FF0000;}

h1 {
	font-size: 30px;
	}

p.serif {
	font-famili: "Times New Roman", Times, seif;
	}
	
p {
	font-size: 20px;
	color: red;
	}
	
div {
    border: 5px solid black;
    background-color: #F2F3F4;
    padding-top: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
}

body {
background-image: url("background.jpg")
}

a {
	color: red;
	}
	
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 3px solid #000000;
	font-size: 20px;
}
</style>
</head>
<body>

<h1>Exercise 5</h1>
<p>Welcome to my Home Page.</p>


<table>
  <tr>
    <th>Firstname</th>
    <th>Nickname</th>
    <th>Interest</th>
	<th>Favorite Website</th>
  </tr>
  <tr>
    <td>John Dave B. Salcedo</td>
    <td>Dave</td>
	<td><img src="computer.png" alt="computer" style="width:150px;height:100px;"></td>
    <td><p><b><a href="www.youtube.com" target="_blank">Youtube</a></b></p></td>
  </tr>
</table>


<h1>Ask anything about myself.</h1>
<p id="demo"></p>


<table>
  <tr>
    <th>What is my full name?</th>
    <th>Where do I lived?</th>
    <th>How old I am?</th>
	<th>What are the things that interest me?</th>
	<th>What are my favorite foods?</th>
  </tr>
  <tr>
    <td><button type="button" onclick="myFunction()">Try it</button></td>
    <td><button type="button" onclick="myFunction2()">Try it</button></td>
	<td><button type="button" onclick="myFunction3()">Try it</button></td>
    <td><button type="button" onclick="myFunction4()">Try it</button></td>
	<td><button type="button" onclick="myFunction5()">Try it</button></td>
  </tr>
</table>


<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>



    <table align="center">
    <tr>
	
    <th colspan="8"><center><a href="add_data.php">Add data here.</a></th>
    
	</tr>
   <th>Name</th>
    <th>Nickname</th>
    <th>Email</th>
	<th>Address</th>
	<th>Gender</th>
	<th>Cellphone Number</th>
	
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($link, $sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>



</body>
</html>

