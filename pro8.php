<?php
$conn = mysqli_connect("localhost","root","","ex_08");
$result = mysqli_query($conn,"SELECT * FROM employee");
?>
<!DOCTYPE html>
<html>
<body>
<h3>Employee List</h3>
<table border="1" cellpadding="5">
<tr><th>Name</th><th>Email</th><th>Phone</th><th>Date</th></tr>
<?php while($r=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?= $r['emp_name'] ?></td>
<td><?= $r['email'] ?></td>
<td><?= $r['phone'] ?></td>
<td><?= $r['created_date'] ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>


phpMyadmin


 To fetch details from the database.
 Open the XAMPP Control Panel and start the Apache and MySQL.
 Click on the Apache Admin to see the phpMyAdmin.
 Create Database name as ex08 and Table name as employee.
 Insert the Data for the table.
 


USE ex08;
 CREATE TABLE employee(
 id INT AUTO_INCREMENT PRIMARY KEY,
 emp_name VARCHAR(100),
 email VARCHAR(100),
 phone VARCHAR(20),
 created_date DATETIME DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO employee(emp_name,email,phone) VALUES
('sri','sri@example.com','2323234543'),
('devi','devi@example.com','9393452387'),
('dhivya','dhivya@example.com','3290349906'),
('Sanjana','sanjana@example.com','9059098968'),
('viyaan','viyaan@example.com','6750390948');
