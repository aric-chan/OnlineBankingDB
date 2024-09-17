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
if (isset($_POST['max'])) {
    $query = "SELECT MAX(Balance) FROM Account";
    $result = $conn->query($query);

    if($result->num_rows > 0){
        echo "<h1> Maximum balance in a bank account</h1>";
        echo "<br><br><br>";
        echo "<table align=\"center\"border= \"1\">";
        echo "<tr>
                <th>Balance</th>
            </tr>";
        //output data of each row
        while($row = $result->fetch_assoc()){
            echo "<tr>
            <td> ".number_format($row["MAX(Balance)"],1,'.','')." </td>
            </tr>";
        }
    }
}
elseif (isset($_POST['min'])) {
    $query = "SELECT MIN(Balance)FROM Account";
    $result = $conn->query($query);

    if($result->num_rows > 0){
        echo "<h1> Minimum balance in a bank account</h1>";
        echo "<br><br><br>";
        echo "<table align=\"center\"border= \"1\">";
        echo "<tr>
                <th>Balance</th>
            </tr>";
        //output data of each row
        while($row = $result->fetch_assoc()){
            echo "<tr>
            <td> ".number_format($row["MIN(Balance)"],1,'.','')." </td>
            </tr>";
        }
    }
}
else echo "WRONG";
$landingPage = "bank_landing.html";

echo '<div><button onclick="window.location.href=\'' . $landingPage . '\'">Return to landing page</button></div>';
$conn ->close();
?>
