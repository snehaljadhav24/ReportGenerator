<?php
$excel = $_POST['excelValue'];
$output = shell_exec("python process_data.py $excel");
echo $output;
?>
<!DOCTYPE html>
<html>
 <head>
 </head>
<body>
<br>
<br>
<a href="index.html">HOME PAGE</a>
</body>