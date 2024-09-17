INSERT into Customer values(1,'Betty', '3110 Dundas St, London, Ontario, N6B 3L5', 12345600, '2008-01-11', 'Betty@gmail.com');
INSERT into Customer values(2,'David', '4225 49th Avenue, Fort Good Hope, Northwest Territories, X0E 0H0', 86759800, '1995-05-04', 'David@gmail.com');
INSERT into Customer values(3,'Cathy', '4395 Cordova Street, Vancouver, British Columbia', 60450569, '1998-11-24', 'Cathy@gmail.com');
INSERT into Customer values(4, 'Peter', '6782 Happy Street, Richmond, British Columbia', 99988520, '2001-10-17', 'Peter@gmail.com');
INSERT into Customer values(5, 'Judy', '8944 Sexismith Street, Richmond, British Columbia', 22785666, '1985-02-28', 'Judy@gmail.com');


INSERT INTO Account VALUES (1,100000,'Savings',1);
INSERT INTO Account VALUES (2,578,'Checking',1);
INSERT INTO Account VALUES (3,50079,'Savings',2);
INSERT INTO Account VALUES (4,2547,'Checking',2);
INSERT INTO Account VALUES (5,98632,'Savings',3);
INSERT INTO Account VALUES (6,7000,'Checking',3);
INSERT INTO Account VALUES (7,500000,'Savings',4);
INSERT INTO Account VALUES (8,2.4,'Checking',5);


INSERT into Product values(1, 'Active', 'Premium Gold Card', 0.06);
INSERT into Product values(2, 'Active', 'Premium Silver Card', 0.08);
INSERT into Product values(3, 'Discontinue', 'Cash Gold Card', 0.05);
INSERT into Product values(4, 'Discontinue', 'Cash Silver Card', 0.07);
INSERT into Product values(5, 'Active', 'New Home Saver', 0.065);
INSERT into Product values(6, 'Active', 'Credit Line Booster', 0.095);
INSERT into Product values(7, 'Discontinue', 'Refinance', 0.1);
INSERT into Product values(8, 'Discontinue', 'Home Renovation Fund', 0.12);


INSERT into Loan values(5,'2043-12-31',500000);
INSERT into Loan values(6,'2024-12-31',20000);
INSERT into Loan values(7,'2033-12-31',300000);
INSERT into Loan values(8,'2043-12-31',100000);


INSERT into Credit_Cards values(1, 1000, 0.01);
INSERT into Credit_Cards values(2, 1500, 0.02);
INSERT into Credit_Cards values(3, 2000, 0.03);
INSERT into Credit_Cards values(4, 3000, 0.025);


INSERT INTO Bills(`Bill_ID`, `Due_Date`, `Amount`, `Status`) VALUES (1,'2030-12-31',10000,True);
INSERT INTO Bills(`Bill_ID`, `Due_Date`, `Amount`, `Status`) VALUES (2,'2025-12-31',5000,True);
INSERT INTO Bills(`Bill_ID`, `Due_Date`, `Amount`, `Status`) VALUES (3,'2023-11-19',2000,True);
INSERT INTO Bills(`Bill_ID`, `Due_Date`, `Amount`, `Status`) VALUES (4,'2023-11-20',1234,True);


INSERT INTO Handles_Makes_Transaction(`Transaction_ID`, `Bill_ID`, `Transaction_Type`, `Date`, `Amount`) VALUES (1,1,'Deposit','2023-11-19',500);
INSERT INTO Handles_Makes_Transaction(`Transaction_ID`, `Bill_ID`, `Transaction_Type`, `Date`, `Amount`) VALUES (2,2,'Deposit','2024-12-31',1000);
INSERT INTO Handles_Makes_Transaction(`Transaction_ID`, `Bill_ID`, `Transaction_Type`, `Date`, `Amount`) VALUES (3,3,'Withdraw','2023-11-25',20000);



INSERT INTO Payee(`Bill_ID`, `Payee_Name`, `Contact`) VALUES (1,'Langara',6043235511);
INSERT INTO Payee(`Bill_ID`, `Payee_Name`, `Contact`) VALUES (2,'BC Hydro',8002249376);
INSERT INTO Payee(`Bill_ID`, `Payee_Name`, `Contact`) VALUES (3,'Telus',8887643771);


INSERT INTO Employee VALUES (1,'Aric C');
INSERT INTO Employee VALUES (2,'Kyle M');
INSERT INTO Employee VALUES (3,'Mehran M');
INSERT INTO Employee VALUES (4,'Mer L');
INSERT INTO Employee VALUES (5,'John A');
INSERT INTO Employee VALUES (6,'Mike C');
INSERT INTO Employee VALUES (7,'Lucas L');
INSERT INTO Employee VALUES (8,'Hart B');
INSERT INTO Employee VALUES (9,'Manager1');
INSERT INTO Employee VALUES (10,'Manager2');


INSERT INTO Supervise VALUES (9,'Manager1',1,'Aric C');
INSERT INTO Supervise VALUES (10,'Manager2',2,'Kyle M');
INSERT INTO Supervise VALUES (9,'Manager1',3,'Mehran M');
INSERT INTO Supervise VALUES (9,'Manager1',4,'Mer L');


INSERT INTO WorkBranch VALUES ('4567 Lougheed Hwwy','RBC');
INSERT INTO WorkBranch VALUES ('1933 Willingdon','TD Canada');
INSERT INTO WorkBranch VALUES ('4454 Hastings St','BMO');


INSERT INTO Deposit VALUES (1,1,2,500);
INSERT INTO Deposit VALUES (2,2,2,1000);
INSERT INTO Deposit VALUES (3,3,1,2500);


INSERT INTO Withdraw VALUES (1,1,3,9000);