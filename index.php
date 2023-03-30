<?php
require('dbconnect.php');
$sql = "SELECT * FROM employee";
$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);
$order=1;
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <title>ตารางบันทึกข้อมูลลูกค้า</title>
</head>
<body>
<nav class="navbar navbar-light bg-light shadow">
<div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="https://mpics.mgronline.com/pics/Images/564000012126101.JPEG" alt="" width="100" height="40" class="d-inline-block align-text-top" >   
      ตารางบันทึกข้อมูลลูกค้า
      </a>
</div>
</nav> <hr>
<div class="container">
<div class="row">
    <div class="col-9">
        <a href="insertform.php"class="btn btn-primary">+ เพิ่มข้อมูลลูกค้า</a>
        <a href="indexchart.php"class="btn btn-success">สรุป</a>
    </div>         
</div>
<br>
<table id="myTable" class="table table-bordered table-striped table-hove">
  <thead class="table-warning">
      <tr>
      <th>จำนวนลูกค้า</th>
      <th>คำนำหน้า</th>
      <th>ชื่อ</th>
      <th>สกุล</th>
      <th>วันที่</th>
      <th>ตัวเลือกบริการ</th>
      <th>หมายเหตุ / อื่น ๆ</th>
      <th>หมายเลขบริการ</th>
      <th>สถานะ</th>
      <th>แก้ไข</th>
      <th>ลบข้อมูล</th>
      </tr>
  </thead>
<tbody>
    <?php while($row=mysqli_fetch_assoc($result)){ 
    ?>
    <tr>
        <td style="width:5%;"><?php echo $order++; ?></td>
        <td style="width:10%;"><?php echo $row["emp_title"];?></td>
        <td style="width:10%;"><?php echo $row["emp_name"];?></td>
        <td style="width:11%;"><?php echo $row["emp_surname"];?></td>
        <td style="width:10%;"><?php echo $row["emp_birthday"];?></td>
        <td style="width:13%;"><?php echo $row["emp_adr"];?></td>
        <td style="width:13%;"><?php echo $row["emp_skill"];?></td>
        <td><?php echo $row["emp_tel"];?></td>
        <td><?php echo $row["emp_status"];?></td>
        <td style="width:5%;"><a href="editformdata.php?emp_id=<?php echo $row["emp_id"] ?>"class="btn btn-primary">แก้ไข</a></td>
        <td style="width:10%;"><a href="deletedata.php?emp_id=<?php echo $row["emp_id"] ?>"class="btn btn-danger" onclick ="return confirm('ยืนยันการลบข้อมูล')">ลบข้อมูล</a></td>
    </tr>
        <?php } ?>      
        
</tbody>
</table>
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src ="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>
</html>