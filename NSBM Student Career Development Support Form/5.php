<?php

$name = $_POST['fName'];
$email = $_POST['email'];
$degree = $_POST['degree'];
$gender = $_POST['gender'];
$pass = $_POST['password'];
$confirm = $_POST['rPassword'];

if($name == '')
{
    echo "<font style='color:red;'>Name is Empty </font>";
}
if($email == '')
{
    echo "<font style='color:red;'><br>Email is Empty </font>";
}
if($degree == '')
{
    echo "<font style='color:red;'><br>Degree is Empty </font>";
}
if($gender == '')
{
    echo "<font style='color:red;'><br>Gender is Empty </font>";
}
if($pass == '')
{
    echo "<font style='color:red;'><br>Password is Empty </font>";
}
if($pass != $confirm)
{
    echo "<font style='color:red;'><br>Passwords should matched </font>";
}



echo "<br><br><hr>";


echo "<table border='1'>
<tbody>
<tr>
<th>Name</th>
<td>$name</td>
</tr>
<tr>
<th>Email</th>
<td>$email</td>
</tr>
<tr>
<th>Degree</th>
<td>$degree</td>
</tr>
<tr>
<th>Gender</th>
<td>$gender</td>
</tr>

</tbody>
</table>

";
