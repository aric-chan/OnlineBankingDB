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

// Getting values from the form using $_POST
if (isset($_POST['division'])) {
    $query = "SELECT Full_Name FROM Customer WHERE CID IN (
        SELECT DISTINCT CID FROM Account a1
        WHERE NOT EXISTS (
            (SELECT Account_Type FROM Account)
            EXCEPT
            (SELECT Account_Type FROM Account a2 WHERE a1.CID = a2.CID)))"; 

    $result = $conn->query($query);

    if($result->num_rows > 0){
        echo "<h1> Customer full name that have all types of bank account</h1>";
        echo "<br><br><br>";
        echo "<table align=\"center\"border= \"1\">";
        echo "<tr>
                <th>Full Name</th>
            </tr>";
        //output data of each row
        while($row = $result->fetch_assoc()){
            echo "<tr>
            <td> ".$row["Full_Name"]." </td>
            </tr>";
        }
    }
}
else echo "WRONG";
$landingPage = "bank_landing.html";

echo '<div><button onclick="window.location.href=\'' . $landingPage . '\'">Return to landing page</button></div>';
$conn ->close();
?>
