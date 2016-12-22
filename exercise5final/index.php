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
    document.getElementById("demo").innerHTML = "Hi! I'm Kim ibarra.";
	}
	function myFunction2() {
    document.getElementById("demo").innerHTML = "I lived at BCDA, Taguig City.";
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

.error {color: #414040;}

h1 {
	font-size: 30px;
	}

p.serif {
	font-family: "Cursive", Times, seif;
	}
	
p {
	font-size: 20px;
	color: red;
	}
	
div {
    border: 5px solid black;
    background-color: #F2F3F4;
    padding-top: 10px;

}

body {
background-image: url("vector.jpg");
background-size: 1350px 800px;
background-repeat: no-repeat;
}

a {
	color: black;
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
</head>
<body>
<center><FORM METHOD="LINK" ACTION="infomation.php">
<INPUT TYPE="submit" VALUE="Informations">
</FORM> 

<center><FORM METHOD="LINK" ACTION="knowmoreaboutme.php">
<INPUT TYPE="submit" VALUE="More Informations about me!">
</FORM> 

<p><center><h1> WELCOME TO MY Website</p></h1>
<img src="200_s.gif" style="widtg:420px;height 250px">

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
 if(confirm('are you really sure you want to edit ?'))
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
	
   
	
	<center colspan= "20"><FORM METHOD="LINK" ACTION="add_data.php">
<INPUT TYPE="submit" VALUE="Add data here">
</FORM> 
    
	</tr>
   <th><u>Fullname</u></th>
    <th><u>Nickname</u></th>
    <th><u>Email address</u></th>
	<th><u>Home Address</u></th>
	<th><u>Gender</u></th>
	<th><u>Phone/Telephone Number</u></th>
	
    <i><u><th colspan="2">Operations</th></i></u>
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

