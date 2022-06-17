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
	background-image:url("rec3.jpg");
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

</style>
<h1 style="text-align:center;color:red;">Enter the Company Details</h1>
</head>
<body>

<form class="myForm" method="get" enctype="application/x-www-form-urlencoded" action="/html/codes/html_form_handler.cfm">

<label>CompanyName
<input type="text" name="compname" required>
</label> 



<label>Contact Email
<input type="email" name="email_address">
</label>


<label>Intenship Url
<input type="text" name="intenurl">
</label>

<label>Job Url
<input type="text" name="joburl">
</label>

<fieldset>
<legend>Type Of Placement Mode</legend>
<label class="choice"> <input type="radio" name="taxi" required value="on"> On-Drive </label><br/>
<label class="choice"> <input type="radio" name="taxi" required value="off"> Off-Drive </label>
</fieldset>

<label>Drive Date
<input type="datetime-local" name="pickup_time" required>
</label>
	
<label>Location
<select id="pickup_place" name="pickup_place">
<option value="" selected="selected">Select One</option>
<option value="hyd" >Hyderabad</option>
<option value="ben" >Bengulur</option>
<option value="goa" >Goa</option>
</select>
</label> 


<label>Description
<textarea name="comments" maxlength="500"></textarea>
</label>

<label>CTC
<input type="text" name="ctc"  min="0" >
</label>

<label>Minimum Qualified Percentage
<input type="number" min="10" max="100">
<label><br/>



<button>Register Company</button>

</form>

</body>
</html>