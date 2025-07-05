<<<<<<< HEAD
-Custom ERP System -

This is a simple ERP system developed using PHP, MySQL, and Bootstrap , CSS, JS as part of the Full Stack Developer Assignment.

 1. Customer Module

- Add new customers
- View list of all customers
- District list loaded dynamically from database

2. Item Module

- Add new items
- View list of items
- Category and Subcategory selection from DB

 3. Reports Module

- Invoice Report: View invoices filtered by date range
- Invoice Item Report: Detailed items in invoices filtered by date
- Item Report: List of unique items with category, subcategory, and stock quantity

------------------------------------------------------------------------------------------------------

Tech Stack

- PHP (Vanilla)
- MySQL
- Bootstrap 5
- HTML, 
- JavaScript
- CSS

--------------------------------------------------------------------------------------------------------

How to Run Locally


Prerequisites:
- XAMPP installed (or any Apache + MySQL server)
- PHP >= 7.x

Steps:
1. Clone or download this repository into `htdocs` directory:
(xampp\htdocs\erp-system)


2. Start Apache and MySQL in XAMPP Control Panel

3. Open browser and go to:  http://localhost/phpmyadmin


4. Import the provided database:
- File: `assignment.sql`
- DB Name: `ERP`

5. Update database credentials in:
- `config/db.php`

6. Access the system at:  http://localhost/ERP_System/index.php#



=======
# Custom-ERP-System
A simple ERP system built using PHP, MySQL, Bootstrap, CSS and JavaScript for managing customers, items, and reports. Features include form validation, clean UI with Bootstrap cards and tables, dynamic dropdowns, and date-filtered invoice reports.
>>>>>>> b4a7839fc72f18f17c96d2508fe5cb40e2bf88cc
