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
if (isset($_POST['implement_button'])) {

$queryAccount = "ALTER TABLE Account
                --  DROP FOREIGN KEY FK_Account_Customer,
                --  DROP FOREIGN KEY account_ibfk_1,
                 ADD CONSTRAINT FK_Account_Customer FOREIGN KEY (CID) REFERENCES Customer(CID) ON DELETE CASCADE";
$conn->query($queryAccount);


$queryDeposit = "ALTER TABLE Deposit 
                --   DROP FOREIGN KEY deposit_ibfk_1,
                --   DROP FOREIGN KEY FK_Account_Deposit,
                  ADD CONSTRAINT FK_Account_Deposit FOREIGN KEY (Account_Number) REFERENCES Account(Account_Number) ON DELETE CASCADE";
$conn->query($queryDeposit);


$queryWithdraw = "ALTER TABLE Withdraw 
                --    DROP FOREIGN KEY withdraw_ibfk_1,
                --    DROP FOREIGN KEY FK_Account_Withdraw,
                   ADD CONSTRAINT FK_Account_Withdraw FOREIGN KEY (Account_Number) REFERENCES Account(Account_Number) ON DELETE CASCADE";
$conn->query($queryWithdraw);

    echo "Finish implement, Please return to the previous page.";

    $ReturnPage = "CustomerDelete.html";
    echo '<div><button onclick="window.location.href=\'' . $ReturnPage . '\'">Return to previous page</button></div>';
} 
else if (isset($_POST['delete_button'])) {
    $varCid = $_POST['cid'];
    $delete = "DELETE FROM CUSTOMER WHERE CID = $varCid";
    $conn->query($delete);

    $displayCustomer = "SELECT CID, FULL_NAME, ADDRESS, PHONE, Date_Of_Birth, Email FROM Customer";
    $resultCustomer = $conn->query($displayCustomer);
    
    $displayAccount = "SELECT Account_Number, Balance, Account_Type, CID FROM Account";
    $resultAccount = $conn->query($displayAccount);


    echo "<h1> Browse Customer & Account Database </h1>";
    echo "<br><br><br>";
    if($resultCustomer->num_rows > 0){
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
        while($row = $resultCustomer->fetch_assoc()){
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
    
    if($resultAccount->num_rows > 0){
        echo "<table align=\"center\"border= \"1\">";
        echo "<tr>
                <th>Account Number</th>
                <th>Balance</th>
                <th>Account Type</th>
                <th>Customer ID</th>
    
            </tr>";
        //output data of each row
        while($row = $resultAccount->fetch_assoc()){
            echo "<br>";
            echo "<tr>
            <td> ".$row["Account_Number"]." </td>
            <td> ".$row["Balance"]." </td>
            <td> ".$row["Account_Type"]."  </td>
            <td> ".$row["CID"]." </td>
                </tr>";
            }
        }
    $landingPage = "bank_landing.html";

    echo '<div><button onclick="window.location.href=\'' . $landingPage . '\'">Return to landing page</button></div>';
}
else{
    echo "Error";
}

$conn ->close();
?>
