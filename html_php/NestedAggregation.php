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
if (isset($_POST['average'])) {

$query = "SELECT AVG(Balance),Account_Type FROM Account GROUP BY Account_Type";
$result = $conn->query($query);

if($result->num_rows > 0){
    echo "<h1> Average balance by account type</h1>";
    echo "<br><br><br>";
    echo "<table align=\"center\"border= \"1\">";
    echo "<tr>
            <th>Account</th>
            <th>Balance</th>
        </tr>";
    //output data of each row
    while($row = $result->fetch_assoc()){
        echo "<tr>
        <td> ".$row["Account_Type"]." </td>
        <td> ".number_format($row["AVG(Balance)"],1,'.','')." </td>
        
         </tr>";
        }
    }
}
else echo "WRONG";
$landingPage = "bank_landing.html";

echo '<div><button onclick="window.location.href=\'' . $landingPage . '\'">Return to landing page</button></div>';
$conn ->close();
?>
