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
    $varCid = $_POST['cid'];
    $varAddress = $_POST['address'];
    $varPhone = $_POST['phone'];
    $varEmail = $_POST['email'];
    $errorMessage = "";
    

    // Check if the selected column is not empty
    if (!empty($varCid)) {
        if (!empty($varAddress) && empty($varPhone) && empty($varEmail) ){
            $query = "UPDATE Customer SET Address = '$varAddress' WHERE CID = $varCid";
            $conn->query($query);
        }
        else if (!empty($varAddress) && !empty($varPhone) && empty($varEmail) ){
            $query = "UPDATE Customer SET Address = '$varAddress', Phone = $varPhone WHERE CID = $varCid";
            $conn->query($query);
        }        
        else if(!empty($varAddress) && !empty($varPhone) && !empty($varEmail) ){
            $query = "UPDATE Customer SET Address = '$varAddress', Phone = $varPhone, Email = '$varEmail' WHERE CID = $varCid";
            $conn->query($query);
        }
        else if (!empty($varAddress) && empty($varPhone) && !empty($varEmail) ){
            $query = "UPDATE Customer SET Address = '$varAddress', Email = '$varEmail' WHERE CID = $varCid";
            $conn->query($query);
        }        
        else if (empty($varAddress) && !empty($varPhone) && empty($varEmail) ){
            $query = "UPDATE Customer SET Phone = $varPhone WHERE CID = $varCid";
            $conn->query($query);
        }        
        else if(empty($varAddress) && !empty($varPhone) && !empty($varEmail) ){
            $query = "UPDATE Customer SET Phone = $varPhone, Email = '$varEmail' WHERE CID = $varCid";
            $conn->query($query);
        }
        else if(empty($varAddress) && empty($varPhone) && !empty($varEmail)){
            $query = "UPDATE Customer SET Email = '$varEmail' WHERE CID = $varCid";
            $conn->query($query);
        }        
        else{echo "Nothing Update in the database! ";
        }
        $display = "SELECT CID, FULL_NAME, ADDRESS, PHONE, Date_Of_Birth, Email FROM Customer c WHERE CID = $varCid";
        $result = $conn->query($display);
        if($result->num_rows > 0){
            echo "<h1> Updated Customer Information </h1>";
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
                <td> ".$row["FULL_NAME"]." </td>
                <td> ".$row["ADDRESS"]."  </td>
                <td> ".$row["PHONE"]." </td>
                <td> ".$row["Date_Of_Birth"]." </td>
                <td> ".$row["Email"]."  </td>
                 </tr>";
                }
            }
    } 
    else {
        echo "Return and input Customer ID.";
    }
}
$landingPage = "bank_landing.html";

echo '<div><button onclick="window.location.href=\'' . $landingPage . '\'">Return to landing page</button></div>';
$conn->close();
?>