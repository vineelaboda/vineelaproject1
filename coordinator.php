<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>My Example</title>
<?php


  function coordinator(){
	   $CompanyName1 = $_POST['companyname'];
       $Elizibility1 = $_POST['elizible'];
	   $Ctc1 = $_POST['salary'];
	   $InterLink1= $_POST['internship'];
	   $JobLink1= $_POST['joblink'];
	   $Description1= $_POST['des'];
	   $Location1 = $_POST['loc'];
	   $RecruitmentType1=$_POST['recruit'];
	   $DriveDate1=$_POST['onoff'];
	   $ContactMail1=$_POST['contactmail'];
	   
	   
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

$sql = "INSERT INTO companylistdb(COMPANYNAME,ELIGIBILITY,CTC,INTERNLINK,JOBLINK,DESCRIPTION,LOCATION,RECRUITMENTTYPE,DRIVEDATE,CONTACTMAIL)
VALUES('$CompanyName1 ','$Elizibility1 ','$Ctc1','$InterLink1','$JobLink1','$Description1','$Location1','$RecruitmentType1','$DriveDate1','$ContactMail1')";

if (mysqli_query($conn, $sql)) {
  
  if($CompanyName1)
  {
	  mysqli_close($conn);
	 // header("Location:http://localhost/Test/codregister.php");s
	 //die();
  }
} else {
	mysqli_close($conn);
	echo "GO OUT";
 
}


  }
  

?>  
<script>
function coordinatorjs()
{
var result ="<?php coordinator(); ?>";
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
<h1 style="text-align:center;color:red;">coordinator companylist </h1>
</head>
<body>

<form class="myForm" method="post"  >


<label>CompanyName
<input type="text" name="companyname" required>
</label> 
<br/>
<br/>

<label>Elizibility<br/>
<input type="text" name="elizible" required>
</label> 
<br/>
<br/>

<label>Ctc
<input type="text" name="salary" required>
</label>
<br/>
<br/>


<label>InterLink
<input type="text" name="internship" required>
</label>
<br/>
<br/>


<label>JobLink
<input type="text" name="joblink">
</label>
<br/>
<br/>

<label>Description
<input type="text" name="des">
</label>
<br/>
<br/>
<br/>


<label>Location
<input type="text" name="loc">
</label>
<br/>
<br/>


<label>RecruitmentType
<input type="text" name="recruit" required>
</label>
<br/> 
<br/>


<label>DriveDate
<input type="date"  name="onoff" required>
</label>
<br/>

<label>ContactMail
<input type="text"  name="contactmail" required>
</label>
<br/>


<button onclick ="coordinatorjs()">Register</button>
<button type="Button"><a href="website.html">Log Out</a></button>

</form>

</body>
</html>