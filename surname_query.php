<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM employee_record WHERE Surname='Sharma';");
?>
<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" href="style.css">
 <title> Surname is Sharma</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Name</td>
    <td>Surname</td>
    <td>Department</td>
    <td>Salary</td>
    <td>EmpID</td>
    <td>DOJ</td>
    <td>DOB</td>
    <td>Manager</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Name"]; ?></td>
    <td><?php echo $row["Surname"]; ?></td>
    <td><?php echo $row["Department"]; ?></td>
    <td><?php echo $row["Salary"]; ?></td>
    <td><?php echo $row["EmpID"]; ?></td>
    <td><?php echo $row["DOJ"]; ?></td>
    <td><?php echo $row["DOB"]; ?></td>
    <td><?php echo $row["Manager"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>