<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Main Page</title>


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
	


body {
background-image: url('http://localhost/exercise6/codeigniter/pics/vector.jpg');
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
<center><FORM METHOD="LINK" ACTION="<?php echo base_url();?>index.php/users/info">
<INPUT TYPE="submit" VALUE="Informations">
</FORM> 

<center><FORM METHOD="LINK" ACTION="<?php echo base_url();?>index.php/users/more">
<INPUT TYPE="submit" VALUE="More Informations about me!">
</FORM> 

<p><center><h1> WELCOME TO MY Website</p></h1>
<img src="http://localhost/exercise6/codeigniter/pics/200_s.gif" style="widtg:420px;height 250px">
<center colspan= "20"><FORM METHOD="LINK" ACTION="<?php echo base_url();?>index.php/users/add_form">
<INPUT TYPE="submit" VALUE="Add data here">
</FORM> 
<div id="body">
	<div id="content">
	
		<table align="center">
			<tr>
				<th style="text-decoration: underline;">Fullname</th>
				<th style="text-decoration: underline;">Nickname</th>
				<th style="text-decoration: underline;">Email address</th>
				<th style="text-decoration: underline;">Home Address</th>
				<th style="text-decoration: underline;">Gender</th>
				<th style="text-decoration: underline;">Phone/Telephone Number</th>
				<th colspan="2" style="text-decoration: underline;">Operations</th>
			</tr>
			
		<?php foreach ($user_list as $u_key){ ?>

			<tr>

				<td><?php echo $u_key->name; ?></td>

				<td><?php echo $u_key->nickname; ?></td>

				<td><?php echo $u_key->email; ?></td>

				<td><?php echo $u_key->hadd; ?></td>
				
				<td><?php echo $u_key->gender; ?></td>
				
				<td><?php echo $u_key->cpnum; ?></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('Users_edit',<?php echo $u_key->user_id;?>)">EDIT</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)">DELETE</a></td>

			</tr>

<?php }?>
			
			
		</table>
	</div>
</div>

</body>

</html>	