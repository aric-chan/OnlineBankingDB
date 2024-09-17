## Goal of the database
Our goal was to develop an Online Banking System that would let bank employee create and manage their account and use different queries with the intent to interact with the banking system using our php and html pages. We have created a script which has tuples inserted into each table that we connected to our pages from our database.

## How to run sql scripts to populate data entries and interact database with html
1. After installing XAMPP, put all html and php files to HTDOCS folder and place in root directory of XAMPP installation
2. In phpMyAdmin, change the root user password to "root"
3. Create a database "test"
4. To run SQL scripts, click the database "test" and then click SQL tab
5. First run the Create_Table, paste the text in the text field and click go button
6. Then run the Insertion, paste the text in the text field and click go button
7. Input "http://localhost/bank_landing.html" in your browser to launch the bank landing page

## List of queries constructed
-- Projection Query: User will be able to choose any column within the customer table and display it using a drop down list and a submit button. 
-- Selection Query: User can check a customer tuple when submitting the date of birth of a customer. So in short selects customer where date of birth = user input, if the input is valid then a table of their information will be displayed.
-- Join Query: By joining the Product and Credit Card table, bank employees can browse the each credit card product details and its product status. Similarly, users can browse loan product details by clicking the button of loan that join the Product and Loan table.
-- Division Query: The user can display on a table a customer list that has all types of bank account.
-- Aggregation Query:  The user can click either the maximum balance or the minimum balance, choosing either the page will display a table with the greatest balance in our banking system or with minimum the latter. 
-- Nested Aggregation Query: The user can display the average balance by account type which is grouped by the account type.
-- Delete Operation: The user has the ability to delete a tuple from the customer table of what ever customer ID is given, but first they must click the implementation of the ON DELETE CASCADE button for the operation run successfully and the deletion will be performed.
-- Update Operation: User picks a userID to update and they are free to update any of the following options: address, phone or email respectively. Once done it will update that row and display it to the user the successful update.
