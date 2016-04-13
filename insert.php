<?php
$data = json_decode(file_get_contents("php://input"));
$empno = mysql_real_escape_string($data->empno);
$fname = mysql_real_escape_string($data->fname);
$lname = mysql_real_escape_string($data->lname);
$dept = mysql_real_escape_string($data->dept);
mysql_connect("localhost","hr","hr");
mysql_select_db("MySql");
mysql_query("INSERT INTO EMPLOYEE('EMP_NO','FIRST_NAME','LAST_NAME','DEPT_NAME')VALUES('".$empno."','".$fname."','".$lname."','".$dept."')");
 ?>