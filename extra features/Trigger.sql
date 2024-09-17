--Initialize two accounts when there is a insertion in customer database
DELIMITER //
CREATE TRIGGER after_customer_insert
AFTER INSERT ON Customer
FOR EACH ROW
BEGIN
    INSERT INTO Account (Balance, Account_Type, CID)
    VALUES (0,'Checking', NEW.CID);
    INSERT INTO Account (Balance, Account_Type, CID)
    VALUES (0,'Saving', NEW.CID);
END;
//

DELIMITER ;

