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
  <title>บันทึกข้อมูลพนักงาน</title>
</head>

<body>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRf8B-3x64jST65FNLAd5gefZ6DLAZS5sFNOYnDWPcjhA&s" alt="" width="150" height="90" class="d-inline-block align-text-top">
  <div class="container">
    <?php //include "nav.php"; 
    ?>
    <h1 class="text-center">บันทึกข้อมูลลูกค้า</h1>
    <hr>
    <form action="insertdata.php" method="POST" class="form-signin">
      <!-- <div class="form-group">
        <label for="emp_title">คำนำหน้า :</label>
        <select name="emp_title" class="form-control" required>
          <option value="นาย">นาย</option>
          <option value="นาง">นาง</option>
          <option value="นางสาว">นางสาว</option>
        </select>
      </div> -->
      <div class="form-group">
        <label for="emp_title">คำนำหน้า</label>
        <input type="text" name="emp_title" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_name">ชื่อ </label>
        <input type="text" name="emp_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_surname">นามสกุล </label>
        <input type="text" name="emp_surname" class="form-control"><br>
      </div>
      <div class="form-group">
        <label for="emp_birthday">วันที่ </label>
        <input type="date" name="emp_birthday" class="form-control" required><br>
      </div>
      <div class="form-group">
        <label for="emp_adr">ตัวเลือกบริการ </label>
        <select name="emp_adr" class="form-control" required>
          <option value="1.ยกเลิกหมายเลขทรศ">1.ยกเลิกหมายเลขทรศ</option>
          <option value="2.IP PHONE Sim">2.IP PHONE Sim</option>
          <option value="3.Fiber">3.Fiber</option>
          <option value="4.IP PHONE Fiber">4.IP PHONE Fiber</option>
          <option value="5.ADS">5.ADSL</option>
          <option value="6.Wireless Net">6.Wireless Net</option>
          <option value="7.อื่นๆ">7.อื่นๆ</option>
        </select>
      </div>
      <div class="form-group">
        <label for="emp_skill">หมายเหตุ / อืนๆ </label>
        <textarea name="emp_skill" class="form-control"></textarea><br>
      </div>
      <div class="form-group">
        <label for="emp_tel">หมายเลขบริการ</label>
        <input type="tel" name="emp_tel" class="form-control" required><br>
      </div>

      <div class="form-group">
        <label for="emp_status">สถานะ </label>
        <select name="emp_status"class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option value="Inactive">Inactive</option>
          <option value="Active">Active</option>
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
      </div> --> 
      <div class="my-3">
        <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
        <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
      </div>
    </form>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>