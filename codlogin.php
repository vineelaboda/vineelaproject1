<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>My Example</title>

<!-- CSS -->
<style>
body
{
	background-image:url("mm.jpg");
	background-repeat:no-repeat;
	background-size:100% 100%;
	
	
	widht:100%;
	height:100%;
}
	
.myForm {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.8em;
padding: 1em;
border: 1px solid #ccc;
width: 20em;
margin : 0 auto;
box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.myForm * {
box-sizing: border-box;
}

.myForm input[type="text"],
.myForm input[type="tel"],
.myForm input[type="email"],
.myForm input[type="datetime-local"],
.myForm select,
.myForm textarea {
display: block;
width: 100%;
border: 1px solid #ccc;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.9em;
padding: 0.3em;
}

.myForm button {
padding: 0.5em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-top: 1em;
}

.myForm button:hover {
background: #ccc;
cursor: pointer;
}

label
{
padding-top:10px;
}
body
{
	background-image:url("cur.jpg");
	background-repeat:no-repeat;
	widht:100%;
	height:100%;
}


</style>

<?php

function login()
{
$name1 = $_POST['uid'];
$pass1 = $_POST['pid'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT USERNAME,PASSWORD FROM codreg WHERE USERNAME='$name1' and PASSWORD='$pass1' ";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
mysqli_close($conn);
if($name1)
{	
header("Location:http://localhost/Test/coordinator.php");
}

} else {
 mysqli_close($conn);
  echo "GO OUT";
}
}

?>


<script>
function loginjs()
{
var result ="<?php login(); ?>";
if(result == "GO OUT")
{
window.alert("Invalid username /password");
}
}
</script>


<h1 style="text-align:center;color:red;">coordinator Login Form</h1>
</head>
<body>

<form class="myForm" method="post" >


<label>User ID
<input type="text" name="uid" required>
</label> 

<label>Password
<input type="text" name="pid" required>
</label>

<button onclick="loginjs()" id="n2">Login</button>

</form>

<h5>Not Register <a href="codregister.php">Click here</a></h5>


</body>
</html>