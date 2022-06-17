<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>My Example</title>
<?php


  function register(){
	   $FirstName = $_POST['firstname'];
       $LastName  = $_POST['lastname'];
	   $RegisterID = $_POST['registerid'];
	   $Department = $_POST['dept'];
	   $Email = $_POST['email_address'];
	   $DateOfBirth = $_POST['dob'];
	   $Percentage = $_POST['percentage'];
	   $SelectGender=$_POST['taxi'];
	   
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

$sql = "INSERT INTO studentlistdb(FIRSTNAME, LASTNAME,ID,EMAIL,GENDER,CGPA,PASSWORD,DEPARTMENT)
VALUES('$FirstName','$LastName ','$RegisterID','$Email','$SelectGender','$Percentage','$DateOfBirth','$Department')";

if (mysqli_query($conn, $sql)) {
  
  if($FirstName)
  {
	  mysqli_close($conn);
	  header("Location:http://localhost/Test/studentlogin.php");
  }
} else {
	mysqli_close($conn);
	echo "GO OUT";
 
}


  }
  

?>  
<script>
function registerjs()
{
var result ="<?php register(); ?>";
if(result == "GO OUT")
{
	window.alert("Something went wrong!Try again.");
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
	background-repeat:no-repeat;
	background-size:100% 100%;
	widht:100%;
	height:100%;
}


</style>
<h1 style="text-align:center;color:red;">Student Registery form</h1>
</head>
<body>

	

<form class="myForm" method="post"  >


<label>FirstName
<input type="text" name="firstname" required>
</label> 

<label>LastName
<input type="text" name="lastname" required>
</label> 

<label>RegisterID
<input type="text" name="registerid" required>
</label>
<br/>


<label>Department
<input type="text" name="dept" required>
</label>


<label>Email 
<input type="text" name="email_address">
</label>


<fieldset>
<legend>Select Gender</legend>
<label class="choice"> <input type="radio" name="taxi" required value="M"> Male </label>
<label class="choice"> <input type="radio" name="taxi" required value="F"> Female </label>
</fieldset>
<br/>

<label>Date Of Birth
<input type="date" name="dob" required>
</label>
<br/> 
<br/>


<label>Percentage
<input type="number" min="0" max="100" name="percentage" required>
</label>
<br/>

<button onclick ="registerjs()">Register</button>

</form>

</body>
</html>