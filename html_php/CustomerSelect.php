<?php
$servername = "localhost";
$username ="root";
$password = "root";
$dbname = "test";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Getting values from the form using $_POST
$dob = $_POST['dob'];

$query = "SELECT * FROM Customer WHERE Date_of_Birth = '$dob'";
$result = $conn->query($query);

if($result->num_rows > 0){
    echo "<h1> Customer Search Result </h1>";
    echo "<br><br><br>";
    echo "<table align=\"center\"border= \"1\">";
    echo "<tr>
            <th>Customer ID</th>
            <th>Full Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Date of Birth</th>
            <th>Email</th>        
        </tr>";
    //output data of each row
    while($row = $result->fetch_assoc()){
        echo "<tr>
        <td> ".$row["CID"]." </td>
        <td> ".$row["Full_Name"]." </td>
        <td> ".$row["Address"]."  </td>
        <td> ".$row["Phone"]." </td>
        <td> ".$row["Date_of_Birth"]." </td>
        <td> ".$row["Email"]."  </td>
         </tr>";
        }
    }
else{
        echo "Invalid input / No such customer";
    }
$landingPage = "bank_landing.html";

echo '<div><button onclick="window.location.href=\'' . $landingPage . '\'">Return to landing page</button></div>';
$conn ->close();
?>
