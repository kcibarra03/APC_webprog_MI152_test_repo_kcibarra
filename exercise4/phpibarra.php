<!DOCTYPE html>
<html>
<head>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "My Name is Kim Ibarra.";
}
function myFunction2() {
    document.getElementById("demo").innerHTML = "I study at Asia Pacific College.";
}
function myFunction3() {
    document.getElementById("demo").innerHTML = "I'm 18 years old.";
}
function myFunction4() {
    document.getElementById("demo").innerHTML = "I'm a gamer and I love to play basketball.";
}
function myFunction5() {
    document.getElementById("demo").innerHTML = "I'm a burger lover.";
}
</script>
<style>
h1 {
font-size: 30px;
}
p.serif {
font-famili: "Times New Roman", Times, seif;
}
p {
font-size: 35px;
color: white;
}
div {
    border: 2pxpx solid white;
    background-color: #F2F3F4;
    padding-top: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
}
body {
background-image: url("download (5).jpg")
}
a {
color: red;
}
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 2px solid #000000;
}
</style>
</head>
<body>

<h1>JAVASCRIPT</h1>
<p>Welcome to my Home Page.</p>

<div>
<table>
  <tr>
    <th>Firstname</th>
    <th>Nickname</th>
    <th>Interest</th>
<th>Favorite Website</th>
  </tr>
  <tr>
    <td>Kim Ibarra</td>
    <td>Kim</td>
<td><img src="download (1).jpg" alt="Basketball" style="width:150px;height:100px;"></td>
    <td><p><b><a href="www.Ign.com" target="_blank">IGN</a></b></p></td>
  </tr>
</table>
</div>

<h1>Press the buttons below to know more about me.</h1>
<p id="demo"></p>

<table>
  <tr>
    <th>What is my full name?</th>
    <th>Where do I study?</th>
    <th>How old I am?</th>
<th>Interests?</th>
<th>What is my favorite food?</th>
  </tr>
  <tr>
    <td><button type="button" onclick="myFunction()">PRESS</button></td>
    <td><button type="button" onclick="myFunction2()">PRESS</button></td>
<td><button type="button" onclick="myFunction3()">PRESS</button></td>
    <td><button type="button" onclick="myFunction4()">PRESS</button></td>
<td><button type="button" onclick="myFunction5()">PRESS</button></td>
  </tr>
</table>
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
 
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
 
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>