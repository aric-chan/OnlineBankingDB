<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Getting values from the form using $_POST
if (isset($_POST['loan'])) {
    $query = "SELECT Product.Product_ID, Product.Status, Product.Type, Product.Interest_Rate, Loan.Maturity, Loan.Amount FROM Product, Loan WHERE Product.Product_ID = Loan.Product_ID";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        echo "<h1> Loan Product Result </h1>";
        echo "<br><br><br>";
        echo "<table align=\"center\"border= \"1\">";
        echo "<tr>
                <th>Product ID</th>
                <th>Product Status</th>
                <th>Product Name</th>
                <th>Interest Rate</th>
                <th>Longest Maturity</th>
                <th>Maximum Loan Amount</th>        
            </tr>";
        //output data of each row
        while($row = $result->fetch_assoc()){
            echo "<tr>
            <td> ".$row["Product_ID"]." </td>
            <td> ".$row["Status"]." </td>
            <td> ".$row["Type"]."  </td>
            <td> ". ($row["Interest_Rate"] * 100)."% </td>
            <td> ".$row["Maturity"]." </td>
            <td> ".number_format($row["Amount"], 0, '', ',')."  </td>
             </tr>";
            }
}
}
elseif (isset($_POST['card'])) {
    $query = "SELECT Product.Product_ID, Product.Status, Product.Type, Product.Interest_Rate, Credit_Cards.CardLimit, Credit_Cards.Rebate_Rate FROM Product, Credit_Cards WHERE Product.Product_ID = Credit_Cards.Product_ID";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        echo "<h1> Card Product Result </h1>";
        echo "<br><br><br>";
        echo "<table align=\"center\"border= \"1\">";
        echo "<tr>
                <th>Product ID</th>
                <th>Product Status</th>
                <th>Product Name</th>
                <th>Cash Advance Rate</th>
                <th>Card Limit</th>
                <th>Rebate Rate</th>        
            </tr>";
        //output data of each row
        while($row = $result->fetch_assoc()){
            echo "<tr>
            <td> ".$row["Product_ID"]." </td>
            <td> ".$row["Status"]." </td>
            <td> ".$row["Type"]."  </td>
            <td> ". ($row["Interest_Rate"] * 100)."% </td>
            <td> ".number_format($row["CardLimit"],0,'',',')." </td>
            <td> ".($row["Rebate_Rate"] * 100)."%  </td>
             </tr>";
            }
}
}
else{
    echo "Invalid input";
}
$landingPage = "bank_landing.html";

echo '<div><button onclick="window.location.href=\'' . $landingPage . '\'">Return to landing page</button></div>';
$conn->close();
?>
