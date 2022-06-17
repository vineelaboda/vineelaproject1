<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>My Example</title>
<?php


  function codregister(){
	   $UserName1 = $_POST['username'];
       $Password1 = $_POST['password'];
	   $Email1= $_POST['email'];
	   $ContactNo1 = $_POST['contactno'];
	   
	   
       $servername = "localhost";
        $username = "root";
       $passwor = "";
       $dbname = "studentdb";

// Create connection
$conn = mysqli_connect($servername, $username, $passwor, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO codreg(USERNAME,PASSWORD,EMAIL,CONTACTNO)
VALUES('$UserName1','$Password1','$Email1','$ContactNo1')";

if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	if($Password1)
	{
	header("Location:http://localhost/Test/codlogin.php");
	}
} else {
  mysqli_close($conn);
  echo "GO OUT";
}


  }
  

?>  
<script>
function codregisterjs()
{
var result ="<?php codregister(); ?>";
if(result == "GO OUT")
{
	window.alert("Invalid username/password");
}
}
</script>
 
<style>
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
padding: 1em;
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
	background-image:url("pic.png");
	background-repeat: no-repeat;
    
	widht:100%;
	height:100%;
}


</style>
<h1 style="text-align:center;color:red;">Coordinator Registery form</h1>
</head>
<body>

<form class="myForm" method="post"  >


<label>UserName
<input type="text" name="username" required>
</label> 

<label>Password
<input type="text" name="password" required>
</label> 

<label>Email
<input type="text" name="email" required>
</label>
<br/>


<label>ContactNo
<input type="text" name="contactno" required>
</label>







<button onclick ="codregisterjs()">codregister</button>

</form>

</body>
</html>