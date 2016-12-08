<!DOCTYPE html>
<html>
<head>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "My name is Kim Ibarra.";
	}
	function myFunction2() {
    document.getElementById("demo").innerHTML = "I lived at BCDA, Taguig City.";
	}
	function myFunction3() {
    document.getElementById("demo").innerHTML = " I'm 18 years old.";
	}
	function myFunction4() {
    document.getElementById("demo").innerHTML = "I play bastketball, even in video games.";
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
	font-size: 30px;
	color: white;
	}
	
div {
    border: 2pxpx solid black;
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
    padding: 10px;
    text-align: left;
    border-bottom: 2px solid #000000;
}
h1{
	color: white;
}
h2{
	color:white;
}
tr{
	color: white
}
</style>
</head>
<body>

<h1>WEBPROG</h1>
<p>My Home Page.</p>

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
    <td>Kim or Harvey</td>
	<td><img src="computer.png" alt="computer" style="width:150px;height:100px;"></td>
    <td><p><b><a href="www.youtube.com" target="_blank">Youtube</a></b></p></td>
  </tr>
</table>
</div>

<h1>Want to know more about me?</h1>
<h2> Click the buttons below to know more information about me </h2>
<p id="demo"></p>
<style>

</style>
<div>
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
</div>

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

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
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




</body>
</html>

