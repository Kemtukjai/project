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
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRf8B-3x64jST65FNLAd5gefZ6DLAZS5sFNOYnDWPcjhA&s" class="img-fluid" alt="...">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <title>ตารางบันทึกข้อมูลลูกค้า</title>
</head>
<body>
    <div Class="container">
    <h1 class="text-center">ตารางบันทึก</h1>
    
<div class="row">
    <div class="col-6">
        <a href="insertform.php"class="btn btn-primary">กรอกข้อมูลลูกค้า</a>
        <a href="indexchart.php"class="btn btn-primary ">สรุป</a>
    </div>         
</div>
<br>
<table id="myTable" class="table table-bordered">
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
        <td><?php echo $order++; ?></td>
        <td><?php echo $row["emp_title"];?></td>
        <td><?php echo $row["emp_name"];?></td>
        <td><?php echo $row["emp_surname"];?></td>
        <td><?php echo $row["emp_birthday"];?></td>
        <td><?php echo $row["emp_adr"];?></td>
        <td><?php echo $row["emp_skill"];?></td>
        <td><?php echo $row["emp_tel"];?></td>
        <td><?php echo $row["emp_status"];?></td>
        <td><a href="editformdata.php?emp_id=<?php echo $row["emp_id"] ?>"class="btn btn-primary">แก้ไข</a></td>
        <td><a href="deletedata.php?emp_id=<?php echo $row["emp_id"] ?>"class="btn btn-danger" onclick ="return confirm('ยืนยันการลบข้อมูล')">ลบข้อมูล</a></td>
    </tr>
        <?php } ?>      
        
        </tbody>
</tbody>
</table>
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