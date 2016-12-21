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
background-image: url("http://localhost/exercise6/codeigniter/pics/wews.jpg");
background-repeat: no-repeat;
 background-size: 1365px 800px;

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

<center><FORM METHOD="LINK" ACTION="<?php echo base_url();?>index.php/users/more">
<INPUT TYPE="submit" VALUE="More Informations about me!">
</FORM>
<center><FORM METHOD="LINK" ACTION="<?php echo base_url();?>index.php/users/">
<INPUT TYPE="submit" VALUE="Home">
</FORM>

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
	<td><img src="http://localhost/exercise6/codeigniter/pics/download (1).jpg" alt="basketball" style="width:150px;height:100px;"></td>
    <td><p><b><a href="www.NBA.com" target="_blank">NBA</a></b></p></td>
	<td><p><b><a href="www.IGN.com" target="_blank">IGN</a></b></p></td>
  </tr>
</table>
</body>
</html>