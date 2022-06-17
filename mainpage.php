<!DOCTYPE html>
<html>
  <head>
  <style>
  table {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.8em;
padding: 1em;
border: 0px solid #ccc;
margin : 0 auto;
box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
body
{
	background-image:url("pic.png");
	background-repeat:repeat;
	widht:100%;
	height:100%;
}

  </style>
  <?php
  function GenerateTable() {
        //Build an array containing Customer records.
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


$sql = "SELECT COMPANYNAME,CTC,ELIGIBILITY,INTERNLINK,JOBLINK,DESCRIPTION,LOCATION,RECRUITMENTTYPE FROM companylistdb";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
       // var customers = new Array();
        //customers.push(["Company Name", "CTC", "Eligibility","Intenship link","Job Link","Description","Location","Recuirtment Type"]);
        $res = "";
        while($row = mysqli_fetch_assoc($result)) {
       $rest = $row["COMPANYNAME"]."-".$row["CTC"]."-". $row["ELIGIBILITY"] ."-".$row["INTERNLINK"] ."-".$row["JOBLINK"] ."-".$row["DESCRIPTION"] ."-".$row["LOCATION"] ."-".$row["RECRUITMENTTYPE"];
         $res = $rest . ":" .$res;
		 }
		 
		 echo $res;
 
        }

    
  }
  ?>
  <script>
  function done()
  {
	  
  var result = "<?php GenerateTable();?>";
  var customers = new Array();
        customers.push(["Company Name", "CTC", "Eligibility","Intenship link","Job Link","Description","Location","Recuirtment Type"]);
        
		 
		 myArray = result.split(":");
for(i=0;i<myArray.length;i++)
{
done=myArray[i].split("-");
customers.push([done[0],done[1],done[2],done[3],done[4],done[5],done[6],done[7]]);
}
 
        //Create a HTML Table element.
        var table = document.createElement("TABLE");
        table.border = "1";
 
        //Get the count of columns.
        var columnCount = customers[0].length;
 
        //Add the header row.
        var row = table.insertRow(-1);
        for (var i = 0; i < columnCount; i++) {
            var headerCell = document.createElement("TH");
            headerCell.innerHTML = customers[0][i];
            row.appendChild(headerCell);
		}
 
        //Add the data rows.
        for (var i = 1; i < customers.length-1; i++) {
            row = table.insertRow(-1);
            for (var j = 0; j < columnCount;j++) {
                var cell = row.insertCell(-1);
                cell.innerHTML = customers[i][j];
            }
        }
 
        var dvTable = document.getElementById("dvTable");
        dvTable.innerHTML = "";
        dvTable.appendChild(table);
  }
  </script>
  </head>
  <body onload ="done()">
  <button type="button" style="float:right"><a href="website.html">Log Out</a></button><br/><br/><hr/>
<div id="dvTable"></div>

</body>
</html>