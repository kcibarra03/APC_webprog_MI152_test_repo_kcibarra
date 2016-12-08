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
background-image: url("download.jpg")

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

<h1>WEBPROG</h1>
<p> My Home Page.</p>

<center><a href="index.php" target="_self">Back to main page<a/>
<center><a href="infomation.php" target="_self">Info<a/><center>
<center><a href="knowmoreaboutme.php" target=_self">More Info<a/>

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
	<td><img src="download (1).jpg" alt="basketball" style="width:150px;height:100px;"></td>
    <td><p><b><a href="www.NBA.com" target="_blank">NBA</a></b></p></td>
	<td><p><b><a href="www.IGN.com" target="_blank">IGN</a></b></p></td>
  </tr>
</table>



</head>
<body>
<center>


</body>
</html>

