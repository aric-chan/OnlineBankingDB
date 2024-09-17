-- Create Customer table
CREATE TABLE Customer (
    CID INT PRIMARY KEY,
    Full_Name VARCHAR(255),
    Address VARCHAR(255),
    Phone INT,
    Date_of_Birth DATE,
    Email VARCHAR(255)
);

-- Create Account table
CREATE TABLE Account (
    Account_Number INT AUTO_INCREMENT PRIMARY KEY,
    Balance DECIMAL(10,2),
    Account_Type VARCHAR(255),
    CID INT,
    FOREIGN KEY (CID) REFERENCES Customer(CID)
);

-- Create Product table
CREATE TABLE Product (
    Product_ID INT PRIMARY KEY,
    Status VARCHAR(255),
    Type VARCHAR(255),
    Interest_Rate DECIMAL(5,2)
);

-- Create Loan table
CREATE TABLE Loan (
    Product_ID INT PRIMARY KEY,
    Maturity DATE,
    Amount DECIMAL(10,2),
    FOREIGN KEY (Product_ID) REFERENCES Product(Product_ID)
);

-- Create Credit_Cards table
CREATE TABLE Credit_Cards (
    Product_ID INT PRIMARY KEY,
    CardLimit INT,
    Rebate_Rate DECIMAL(5,2),
    FOREIGN KEY (Product_ID) REFERENCES Product(Product_ID)

);
-- Create Bills table
CREATE TABLE Bills (
    Bill_ID INT PRIMARY KEY,
    Due_Date DATE,
    Amount INT,
    Status VARCHAR(255)
);

-- Create Handles_Makes_Transaction table
CREATE TABLE Handles_Makes_Transaction (
    Transaction_ID INT PRIMARY KEY,
    Bill_ID INT,
    Transaction_Type VARCHAR(255),
    Date DATE,
    Amount DECIMAL(10,2),
    FOREIGN KEY (Bill_ID) REFERENCES Bills(Bill_ID)
);


-- Create Payee table
CREATE TABLE Payee (
    Bill_ID INT PRIMARY KEY,
    Payee_Name VARCHAR(255),
    Contact VARCHAR(255),
    FOREIGN KEY (Bill_ID) REFERENCES Bills(Bill_ID)
);

-- Create Employee table
CREATE TABLE Employee (
    Employee_ID INT PRIMARY KEY,
    Name VARCHAR(255)
);

-- Create Supervise table
CREATE TABLE Supervise (
    Manager_ID INT,
    Manager_Name VARCHAR(255),
    Bank_Teller_ID INT,
    Bank_Teller_Name VARCHAR(255),
    PRIMARY KEY (Manager_ID, Bank_Teller_ID),
    FOREIGN KEY (Manager_ID) REFERENCES Employee(Employee_ID),
    FOREIGN KEY (Bank_Teller_ID) REFERENCES Employee(Employee_ID)
);

-- Create WorkBranch table
CREATE TABLE WorkBranch (
    Location VARCHAR(255),
    Name VARCHAR(255),
    PRIMARY KEY (Location, Name)
   );

-- Create Deposit table
CREATE TABLE Deposit (
    Account_Number INT,
    ProductID INT,
    Transaction_ID INT,
    Amount DECIMAL(10,2),
    PRIMARY KEY (Account_Number, ProductID, Transaction_ID),
    FOREIGN KEY (Account_Number) REFERENCES Account(Account_Number),
    FOREIGN KEY (ProductID) REFERENCES Product(Product_ID),
    FOREIGN KEY (Transaction_ID) REFERENCES Handles_Makes_Transaction(Transaction_ID)
);
-- Create Withdraw table
CREATE TABLE Withdraw (
    Account_Number INT,
    ProductID INT,
    Transaction_ID INT,
    Amount DECIMAL(10,2),
    PRIMARY KEY (Account_Number, ProductID, Transaction_ID),
    FOREIGN KEY (Account_Number) REFERENCES Account(Account_Number),
    FOREIGN KEY (ProductID) REFERENCES Product(Product_ID),
    FOREIGN KEY (Transaction_ID) REFERENCES Handles_Makes_Transaction(Transaction_ID)
);

