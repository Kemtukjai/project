<?php
//เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

//รับค่าที่ส่งมาจากฟอร์ม
$emp_title = $_POST["emp_title"];
$emp_name = $_POST["emp_name"];
$emp_surname = $_POST["emp_surname"];
$emp_birthday = $_POST["emp_birthday"];
$emp_adr = $_POST["emp_adr"];
$emp_skill = $_POST["emp_skill"];
$emp_tel = $_POST["emp_tel"];
$emp_status=$_POST["emp_status"];
//บันทึกข้อมูล
$sql = "INSERT INTO employee(emp_title,emp_name,emp_surname,emp_birthday,emp_adr,emp_skill,emp_tel,emp_status) VALUE('$emp_title','$emp_name','$emp_surname','$emp_birthday','$emp_adr','$emp_skill','$emp_tel','$emp_status')";

$result=mysqli_query($con,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo mysqli_error($con);
}

