## Database Goal

The goal of this project was to develop an Online Banking System that allows bank employees to create and manage customer accounts. Employees can interact with the banking system using PHP and HTML pages, running queries to access different aspects of the system. We created a script that populates the database with sample data and linked it to the web interface for interaction.

## How to Run SQL Scripts and Integrate the Database with HTML

1. **Install XAMPP**:
   - Place all HTML and PHP files into the `htdocs` folder, located in the root directory of your XAMPP installation.
  
2. **Change phpMyAdmin Root Password**:
   - Open `phpMyAdmin` and change the root user password to `"root"`.

3. **Create a Database**:
   - In phpMyAdmin, create a database named `test`.

4. **Run SQL Scripts**:
   - In phpMyAdmin, click on the `test` database, then select the `SQL` tab.
   - First, run the `Create_Table` script by pasting its content into the text field and clicking the **Go** button.
   - Next, run the `Insertion` script in the same manner.

5. **Launch the Bank Landing Page**:
   - Open your browser and go to `http://localhost/bank_landing.html` to view the online banking system.

## List of Constructed Queries

1. **Projection Query**:
   - Users can select any column within the customer table from a dropdown list and display it by submitting the form.

2. **Selection Query**:
   - Users can retrieve customer information by entering a date of birth. If the input is valid, a table of matching customer details will be displayed.

3. **Join Query**:
   - Bank employees can view credit card product details by joining the `Product` and `Credit Card` tables. Similarly, loan details can be accessed by joining the `Product` and `Loan` tables.

4. **Division Query**:
   - Users can display a table of customers who hold all types of bank accounts.

5. **Aggregation Query**:
   - Users can view the customer with the maximum or minimum balance by clicking the corresponding button. The page will display a table with the result.

6. **Nested Aggregation Query**:
   - Users can display the average balance grouped by account type.

7. **Delete Operation**:
   - Users can delete a customer by entering the customer ID. To ensure a successful deletion, the **ON DELETE CASCADE** option must be enabled.

8. **Update Operation**:
   - Users can select a `userID` and update the address, phone number, or email. After submission, the page will display the updated row, confirming the changes.

