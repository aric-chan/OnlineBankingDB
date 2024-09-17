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
if (isset($_POST['formSubmit'])) {
    $varProject = $_POST['Project'];
    $errorMessage = "";

    // Check if the selected column is not empty
    if (!empty($varProject)) {
        // Prepare and execute SQL query
        $query = "SELECT $varProject FROM Customer";
        $result = $conn->query($query);

        if ($result) {
            echo "<h1>Customer Information Results</h1>";
            echo "<br><br><br>";
            echo "<table align=\"center\" border=\"1\">";
            echo "<tr><th>$varProject</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row[$varProject] . "</td></tr>";
            }

            echo "</table>";
        } else {
            echo "Error executing query: " . $conn->error;
        }
    } else {
        echo "Please select a column.";
    }
}

$landingPage = "bank_landing.html";

echo '<div><button onclick="window.location.href=\'' . $landingPage . '\'">Return to landing page</button></div>';

$conn->close();
?>