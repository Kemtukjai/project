<?php
require('dbconnect.php');

$emp_id=$_GET["emp_id"];

$sql="SELECT * FROM employee WHERE emp_id=$emp_id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>
    .form-signin {
    width: 100%;
    max-width: 500px;
    padding: 15px;
    margin: auto;
    }
</style>
<title>แก้ไขข้อมูลลูกค้า</title>
</head>

<body>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRf8B-3x64jST65FNLAd5gefZ6DLAZS5sFNOYnDWPcjhA&s" class="img-fluid" alt="...">
<div class="container">
    <?php //include "nav.php"; 
    ?>
    <h2 class="text-center">แก้ไขข้อมูลลูกค้า</h2>
    <hr>
    <form action="updatedata.php" method="POST" >
        <input type="hidden" value="<?php echo $row["emp_id"]?>" name="emp_id">
    <!-- <div class="form-group">
        <label for="emp_title">คำนำหน้า :</label>
        <select name="emp_title" class="form-control" required>
        <option value="นาย"<?php if ($row["emp_title"]=="นาย"){echo"SELECTED";}?>>นาย</option>
        <option value="นาง"<?php if ($row["emp_title"]=="นาง"){echo"SELECTED";}?>>นาง</option>
        <option value="นางสาว"<?php if ($row["emp_title"]=="นางสาว"){echo"SELECTED";}?>>นางสาว</option>
        </select>
    </div> -->
    
    <!-- <div class="form-floating">
        <select class="form-select" name="emp_title"id="floatingSelect" aria-label="Floating label select example">
        <option value="นาย"<?php if ($row["emp_title"]=="นาย"){echo"SELECTED";}?>>นาย</option>
        <option value="นาง"<?php if ($row["emp_title"]=="นาง"){echo"SELECTED";}?>>นาง</option>
        <option value="นางสาว"<?php if ($row["emp_title"]=="นางสาว"){echo"SELECTED";}?>>นางสาว</option>
        </select>
        <label for="floatingSelect"> คำนำหน้า</label>
    </div> -->

    <div class="form-group">
        <label for="emp_title">คำนำหน้า :</label>
        <input type="text" name="emp_title" class="form-control" value="<?php echo $row["emp_title"];?>">
    </div>

    <div class="form-group">
        <label for="emp_name">ชื่อ :</label>
        <input type="text" name="emp_name" class="form-control" value="<?php echo $row["emp_name"];?>">
    </div>
    <div class="form-group">
        <label for="emp_surname">นามสกุล :</label>
        <input type="text" name="emp_surname" class="form-control" value="<?php echo $row["emp_surname"];?>">
    </div>
    <div class="form-group">
        <label for="emp_birthday">วันที่ :</label>
        <input type="date" name="emp_birthday" class="form-control" value="<?php echo $row["emp_birthday"];?>">
    </div>
    <div class="form-group">
        <label for="emp_adr">ตัวเลือกบริการ :</label>
        <select name="emp_adr" class="form-control" required>
        <option value="1.ยกเลิกหมายเลขทรศ"<?php if ($row["emp_adr"]=="1.ยกเลิกหมายเลขทรศ"){echo"SELECTED";}?>>1.ยกเลิกหมายเลขทรศ</option>
        <option value="2.IP PHONE Sim"<?php if ($row["emp_adr"]=="2.IP PHONE Sim"){echo"SELECTED";}?>>2.IP PHONE Sim</option>
        <option value="3.Fiber"<?php if ($row["emp_adr"]=="3.Fiber"){echo"SELECTED";}?>>3.Fiber</option>>3.Fiber</option>
        <option value="4.IP PHONE Fiber"<?php if ($row["emp_adr"]=="4.IP PHONE Fiber"){echo"SELECTED";}?>>4.IP PHONE Fiber</option>>4.IP PHONE Fiber</option>
        <option value="5.ADS"<?php if ($row["emp_adr"]=="5.ADSL"){echo"SELECTED";}?>>5.ADS</option>>5.ADSL</option>
        <option value="6.Wireless Net"<?php if ($row["emp_adr"]=="6.Wireless Net"){echo"SELECTED";}?>>6.Wireless Net</option>>6.Wireless Net</option>
        <option value="7.อื่นๆ"<?php if ($row["emp_adr"]=="7.อื่นๆ"){echo"SELECTED";}?>>7.อื่นๆ</option>>7.อื่นๆ</option>
        </select>
    </div>
    <div class="form-group">
        <label for="emp_skill">หมายเหตุ / อืนๆ :</label>
        <textarea name="emp_skill" class="form-control"><?php echo $row["emp_skill"];?></textarea>
    </div>
    <div class="form-group">
        <label for="emp_tel">หมายเลขบริการ</label>
        <input type="tel" name="emp_tel" class="form-control" value="<?php echo $row["emp_tel"];?>">
    <div class="form-group">
        <label for="emp_status">ตัวเลือกบริการ :</label>
        <select name="emp_status" class="form-control" required>
        <option value="Inactive"<?php if ($row["emp_status"]=="Inactive"){echo"SELECTED";}?>>Inactive</option>
        <option value="Active"<?php if ($row["emp_status"]=="Active"){echo"SELECTED";}?>>Active</option>
        </select>
    </div>
    <!-- <div class="form-group">
        <label for="emp_user">ชื่อเข้าระบบ</label>
        <input type="tel" name="emp_user" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="emp_pass">รหัสผ่าน</label>
        <input type="password" name="emp_pass" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="emp_level">ระดับผู้ใช้งาน <i class='bx bxs-user-pin'></i></label>
        <select name="emp_level" class="form-control" required>
        <option value="">--เลือกระดับผู้ใช้งาน--</option>
        <option value="a">ผู้ดูแลระบบ</option>
        <option value="u">ผู้ใช้งาน</option>
        </select>
    </div>  -->
    <div class="my-3">
        <input type="submit" value="แก้ไขข้อมูล" class="btn btn-success">
        <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
    </div>
</form>
</div>
<!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
-->
</body>

</html>