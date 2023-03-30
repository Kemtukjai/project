<!doctype html>
<html lang="en">
<head>
<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light shadow">
<div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <img src="https://e7.pngegg.com/pngimages/98/949/png-clipart-computer-icons-arrow-return-angle-text.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
    กลับหน้าแรก 
    </a>
</div>
</nav> <hr>
<div class="alert alert-info" role="alert">
    <h1 class="text-center" >สรุปจำนวนลูกค้าที่มาใช้บริการ</h1> </div><hr>
<div class="container-fluid">
<!-- <div class="row">
<form action="loop2.php" class="form-group" method="POST">
<div class="col-12 col-sm-12 mb-3">
        <label for="">ค้นหาข้อมูล</label>
        <select name="kong"  required> 
        <option value="">--เลือก--</option>
                    <option value="สำนักช่าง">สำนักช่าง</option>
                    <option value="สำนักปลัด">สำนักปลัด</option>
                    <option value="กองสาธารณะสุข">กองสาธารณสุข</option>
                    <option value="งานป้องกัน">งานป้องกัน</option>
                    <option value="สำนักคลัง">สำนักคลัง</option>
                    <option value="กองยุทธศาสตร์">กองยุทธศาสตร์</option>
                    <option value="กองสวัสดิการสังคม">กองสวัสดิการสังคม</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                </select>
        <input type="submit" value="Search" class="btn btn-info "> 
        <hr> </div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12"> -->
<?php
require('dbconnect.php'); 
$sql = "SELECT * FROM `employee`";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$numall=mysqli_num_rows($result);?>
<h4 class="text-center" >สรุปเรื่อง <?php echo $numall ;?> เรื่อง</h4><hr>
    <div class="card">
        <div class="card-body">
        <canvas id="chartBar1"></canvas>
        </div>
    </div>
    </div><hr>
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<h4 class="text-center" >จำนวนหัวข้องาน</h4><hr>
<div class="card">
    <div class="card-body">
    <canvas id="chartBar"></canvas>
    </div>
</div>
</div>
    <div class="col-md-6">
    <h4 class="text-center" >สถานะการดำเนินการ</h4><hr>
    <div class="card">
        <div class="card-body">
        <canvas id="chartpie"></canvas>
        </div>
    </div>
    </div>
</div>
</div><hr>
</div>
</body>
</html>
<!-- --------------------------------------------------------------------------->


<?php
header('Content-Type: text/html; charset=utf-8');
require('dbconnect.php'); 

//------------------------สถานะ------------------------------------// 

//--------------------------กองต่างๆ------------------------------//

$sql = "SELECT * FROM `employee` WHERE emp_status LIKE 'Active'";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$numE=mysqli_num_rows($result); 

$sql = "SELECT * FROM `employee` WHERE emp_status LIKE 'Inactive'";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$numO=mysqli_num_rows($result);



$sql = "SELECT * FROM `employee` WHERE emp_birthday LIKE '2023-01-01' or emp_birthday LIKE '2023-01-02' or emp_birthday LIKE '2023-01-03'or emp_birthday LIKE '2023-01-04'or emp_birthday LIKE '2023-01-05'
or emp_birthday LIKE '2023-01-06'or emp_birthday LIKE '2023-01-07'or emp_birthday LIKE '2023-01-08'or emp_birthday LIKE '2023-01-09'or emp_birthday LIKE '2023-01-10'or emp_birthday LIKE '2023-01-11'or emp_birthday LIKE '2023-01-12'
or emp_birthday LIKE '2023-01-13'or emp_birthday LIKE '2023-01-14'or emp_birthday LIKE '2023-01-15'or emp_birthday LIKE '2023-01-16'or emp_birthday LIKE '2023-01-17'or emp_birthday LIKE '2023-01-18'or emp_birthday LIKE '2023-01-19'
or emp_birthday LIKE '2023-01-20'or emp_birthday LIKE '2023-01-21'or emp_birthday LIKE '2023-01-22'or emp_birthday LIKE '2023-01-23'or emp_birthday LIKE '2023-01-24'or emp_birthday LIKE '2023-01-25'or emp_birthday LIKE '2023-01-26'
or emp_birthday LIKE '2023-01-27'or emp_birthday LIKE '2023-01-28'or emp_birthday LIKE '2023-01-29'or emp_birthday LIKE '2023-01-30'or emp_birthday LIKE '2023-01-31'";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$m1=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_birthday LIKE '2022-02-01' or emp_birthday LIKE '2022-02-02' or emp_birthday LIKE '2023-02-03'or emp_birthday LIKE '2023-02-04'or emp_birthday LIKE '2023-02-05'
or emp_birthday LIKE '2023-01-06'or emp_birthday LIKE '2023-01-07'or emp_birthday LIKE '2023-02-08'or emp_birthday LIKE '2023-02-09'or emp_birthday LIKE '2023-02-10'or emp_birthday LIKE '2023-02-11'or emp_birthday LIKE '2023-02-12'
or emp_birthday LIKE '2023-02-13'or emp_birthday LIKE '2023-02-14'or emp_birthday LIKE '2023-02-15'or emp_birthday LIKE '2023-02-16'or emp_birthday LIKE '2023-02-17'or emp_birthday LIKE '2023-02-18'or emp_birthday LIKE '2023-02-19'
or emp_birthday LIKE '2023-02-20'or emp_birthday LIKE '2023-02-21'or emp_birthday LIKE '2023-02-22'or emp_birthday LIKE '2023-02-23'or emp_birthday LIKE '2023-02-24'or emp_birthday LIKE '2023-02-25'or emp_birthday LIKE '2023-02226'
or emp_birthday LIKE '2023-02-27'or emp_birthday LIKE '2023-02-28'";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$m2=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_birthday LIKE '2023-03-01' or emp_birthday LIKE '2023-03-02' or emp_birthday LIKE '2023-03-03'or emp_birthday LIKE '2023-03-04'or emp_birthday LIKE '2023-03-05'
or emp_birthday LIKE '2023-03-06'or emp_birthday LIKE '2023-03-07'or emp_birthday LIKE '2023-03-08'or emp_birthday LIKE '2023-03-09'or emp_birthday LIKE '2023-03-10'or emp_birthday LIKE '2023-03-11'or emp_birthday LIKE '2023-03-12'
or emp_birthday LIKE '2023-03-13'or emp_birthday LIKE '2023-03-14'or emp_birthday LIKE '2023-03-15'or emp_birthday LIKE '2023-03-16'or emp_birthday LIKE '2023-03-17'or emp_birthday LIKE '2023-03-18'or emp_birthday LIKE '2023-03-19'
or emp_birthday LIKE '2023-03-20'or emp_birthday LIKE '2023-03-21'or emp_birthday LIKE '2023-03-22'or emp_birthday LIKE '2023-03-23'or emp_birthday LIKE '2023-03-24'or emp_birthday LIKE '2023-03-25'or emp_birthday LIKE '2023-03-26'
or emp_birthday LIKE '2023-03-27'or emp_birthday LIKE '2023-03-28'or emp_birthday LIKE '2023-03-29'or emp_birthday LIKE '2023-03-30'";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$m3=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_birthday LIKE '2023-04-01' or emp_birthday LIKE '2023-04-02' or emp_birthday LIKE '2024-03-03'or emp_birthday LIKE '2023-04-04'or emp_birthday LIKE '2023-04-05'
or emp_birthday LIKE '2023-04-06'or emp_birthday LIKE '2023-04-07'or emp_birthday LIKE '2023-04-08'or emp_birthday LIKE '2023-04-09'or emp_birthday LIKE '2023-04-10'or emp_birthday LIKE '2023-04-11'or emp_birthday LIKE '2023-04-12'
or emp_birthday LIKE '2023-04-13'or emp_birthday LIKE '2023-04-14'or emp_birthday LIKE '2023-04-15'or emp_birthday LIKE '2023-04-16'or emp_birthday LIKE '2023-04-17'or emp_birthday LIKE '2023-04-18'or emp_birthday LIKE '2023-04-19'
or emp_birthday LIKE '2023-04-20'or emp_birthday LIKE '2023-04-21'or emp_birthday LIKE '2023-04-22'or emp_birthday LIKE '2023-04-23'or emp_birthday LIKE '2023-04-24'or emp_birthday LIKE '2023-04-25'or emp_birthday LIKE '2023-04-26'
or emp_birthday LIKE '2023-04-27'or emp_birthday LIKE '2023-04-28'or emp_birthday LIKE '2023-04-29'or emp_birthday LIKE '2023-04-30'";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$m4=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_birthday LIKE '2023-05-01' or emp_birthday LIKE '2023-05-02' or emp_birthday LIKE '2023-05-03'or emp_birthday LIKE '2023-05-04'or emp_birthday LIKE '2023-05-05'
or emp_birthday LIKE '2023-05-06'or emp_birthday LIKE '2023-05-07'or emp_birthday LIKE '2023-05-08'or emp_birthday LIKE '2023-05-09'or emp_birthday LIKE '2023-05-10'or emp_birthday LIKE '2023-05-11'or emp_birthday LIKE '2023-05-12'
or emp_birthday LIKE '2023-05-13'or emp_birthday LIKE '2023-05-14'or emp_birthday LIKE '2023-05-15'or emp_birthday LIKE '2023-05-16'or emp_birthday LIKE '2023-05-17'or emp_birthday LIKE '2023-05-18'or emp_birthday LIKE '2023-05-19'
or emp_birthday LIKE '2023-05-20'or emp_birthday LIKE '2023-05-21'or emp_birthday LIKE '2023-05-22'or emp_birthday LIKE '2023-05-23'or emp_birthday LIKE '2023-05-24'or emp_birthday LIKE '2023-05-25'or emp_birthday LIKE '2023-05-26'
or emp_birthday LIKE '2023-05-27'or emp_birthday LIKE '2023-05-28'or emp_birthday LIKE '2023-05-29'or emp_birthday LIKE '2023-05-30'or emp_birthday LIKE '2023-05-31'";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$m5=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee`  WHERE emp_birthday LIKE '2023-06-01' or emp_birthday LIKE '2023-06-02' or emp_birthday LIKE '2023-06-03'or emp_birthday LIKE '2023-06-04'or emp_birthday LIKE '2023-06-05'
or emp_birthday LIKE '2023-06-06'or emp_birthday LIKE '2023-06-07'or emp_birthday LIKE '2023-06-08'or emp_birthday LIKE '2023-06-09'or emp_birthday LIKE '2023-06-10'or emp_birthday LIKE '2023-06-11'or emp_birthday LIKE '2023-06-12'
or emp_birthday LIKE '2023-06-13'or emp_birthday LIKE '2023-06-14'or emp_birthday LIKE '2023-06-15'or emp_birthday LIKE '2023-06-16'or emp_birthday LIKE '2023-06-17'or emp_birthday LIKE '2023-06-18'or emp_birthday LIKE '2023-06-19'
or emp_birthday LIKE '2023-06-20'or emp_birthday LIKE '2023-06-21'or emp_birthday LIKE '2023-06-22'or emp_birthday LIKE '2023-06-23'or emp_birthday LIKE '2023-06-24'or emp_birthday LIKE '2023-06-25'or emp_birthday LIKE '2023-06-26'
or emp_birthday LIKE '2023-06-27'or emp_birthday LIKE '2023-06-28'or emp_birthday LIKE '2023-06-29'or emp_birthday LIKE '2023-06-30'";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$m6=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_birthday LIKE '2023-07-01' or emp_birthday LIKE '2023-07-02' or emp_birthday LIKE '2023-07-03'or emp_birthday LIKE '2023-07-04'or emp_birthday LIKE '2023-07-05'
or emp_birthday LIKE '2023-07-06'or emp_birthday LIKE '2023-07-07'or emp_birthday LIKE '2023-07-08'or emp_birthday LIKE '2023-07-09'or emp_birthday LIKE '2023-07-10'or emp_birthday LIKE '2023-07-11'or emp_birthday LIKE '2023-07-12'
or emp_birthday LIKE '2023-07-13'or emp_birthday LIKE '2023-07-14'or emp_birthday LIKE '2023-07-15'or emp_birthday LIKE '2023-07-16'or emp_birthday LIKE '2023-07-17'or emp_birthday LIKE '2023-07-18'or emp_birthday LIKE '2023-07-19'
or emp_birthday LIKE '2023-07-20'or emp_birthday LIKE '2023-07-21'or emp_birthday LIKE '2023-07-22'or emp_birthday LIKE '2023-07-23'or emp_birthday LIKE '2023-07-24'or emp_birthday LIKE '2023-07-25'or emp_birthday LIKE '2023-07-26'
or emp_birthday LIKE '2023-07-27'or emp_birthday LIKE '2023-07-28'or emp_birthday LIKE '2023-07-29'or emp_birthday LIKE '2023-07-30'or emp_birthday LIKE '2023-07-31'";

$result = mysqli_query($con, $sql) or die(mysqli_error());
$m7=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_birthday LIKE '2023-08-01' or emp_birthday LIKE '2023-08-02' or emp_birthday LIKE '2023-08-03'or emp_birthday LIKE '2023-08-04'or emp_birthday LIKE '2023-08-05'
or emp_birthday LIKE '2023-08-06'or emp_birthday LIKE '2023-08-07'or emp_birthday LIKE '2023-08-08'or emp_birthday LIKE '2023-08-09'or emp_birthday LIKE '2023-08-10'or emp_birthday LIKE '2023-08-11'or emp_birthday LIKE '2023-08-12'
or emp_birthday LIKE '2023-08-13'or emp_birthday LIKE '2023-08-14'or emp_birthday LIKE '2023-08-15'or emp_birthday LIKE '2023-08-16'or emp_birthday LIKE '2023-08-17'or emp_birthday LIKE '2023-08-18'or emp_birthday LIKE '2023-08-19'
or emp_birthday LIKE '2023-08-20'or emp_birthday LIKE '2023-08-21'or emp_birthday LIKE '2023-08-22'or emp_birthday LIKE '2023-08-23'or emp_birthday LIKE '2023-08-24'or emp_birthday LIKE '2023-08-25'or emp_birthday LIKE '2023-08-26'
or emp_birthday LIKE '2023-08-27'or emp_birthday LIKE '2023-08-28'or emp_birthday LIKE '2023-08-29'or emp_birthday LIKE '2023-08-30'or emp_birthday LIKE '2023-08-31'";

$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$m8=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_birthday LIKE '2023-09-01' or emp_birthday LIKE '2023-09-02' or emp_birthday LIKE '2023-09-03'or emp_birthday LIKE '2023-09-04'or emp_birthday LIKE '2023-09-05'
or emp_birthday LIKE '2023-09-06'or emp_birthday LIKE '2023-09-07'or emp_birthday LIKE '2023-09-08'or emp_birthday LIKE '2023-09-09'or emp_birthday LIKE '2023-09-10'or emp_birthday LIKE '2023-09-11'or emp_birthday LIKE '2023-09-12'
or emp_birthday LIKE '2023-09-13'or emp_birthday LIKE '2023-09-14'or emp_birthday LIKE '2023-09-15'or emp_birthday LIKE '2023-09-16'or emp_birthday LIKE '2023-09-17'or emp_birthday LIKE '2023-09-18'or emp_birthday LIKE '2023-09-19'
or emp_birthday LIKE '2023-09-20'or emp_birthday LIKE '2023-09-21'or emp_birthday LIKE '2023-09-22'or emp_birthday LIKE '2023-09-23'or emp_birthday LIKE '2023-09-24'or emp_birthday LIKE '2023-09-25'or emp_birthday LIKE '2023-09-26'
or emp_birthday LIKE '2023-09-27'or emp_birthday LIKE '2023-09-28'or emp_birthday LIKE '2023-09-29'or emp_birthday LIKE '2023-09-30'";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$m9=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_birthday LIKE '2023-10-01' or emp_birthday LIKE '2023-10-02' or emp_birthday LIKE '2023-10-03'or emp_birthday LIKE '2023-10-04'or emp_birthday LIKE '2023-10-05'
or emp_birthday LIKE '2023-10-06'or emp_birthday LIKE '2023-10-07'or emp_birthday LIKE '2023-10-08'or emp_birthday LIKE '2023-10-09'or emp_birthday LIKE '2023-10-10'or emp_birthday LIKE '2023-10-11'or emp_birthday LIKE '2023-10-12'
or emp_birthday LIKE '2023-10-13'or emp_birthday LIKE '2023-10-14'or emp_birthday LIKE '2023-10-15'or emp_birthday LIKE '2023-10-16'or emp_birthday LIKE '2023-10-17'or emp_birthday LIKE '2023-10-18'or emp_birthday LIKE '2023-10-19'
or emp_birthday LIKE '2023-10-20'or emp_birthday LIKE '2023-10-21'or emp_birthday LIKE '2023-10-22'or emp_birthday LIKE '2023-10-23'or emp_birthday LIKE '2023-10-24'or emp_birthday LIKE '2023-10-25'or emp_birthday LIKE '2023-10-26'
or emp_birthday LIKE '2023-10-27'or emp_birthday LIKE '2023-10-28'or emp_birthday LIKE '2023-10-29'or emp_birthday LIKE '2023-10-30'or emp_birthday LIKE '2023-10-31'";
;
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$m10=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_birthday LIKE '2023-11-01' or emp_birthday LIKE '2023-11-02' or emp_birthday LIKE '2023-11-03'or emp_birthday LIKE '2023-11-04'or emp_birthday LIKE '2023-11-05'
or emp_birthday LIKE '2023-11-06'or emp_birthday LIKE '2023-11-07'or emp_birthday LIKE '2023-11-08'or emp_birthday LIKE '2023-11-09'or emp_birthday LIKE '2023-11-10'or emp_birthday LIKE '2023-11-11'or emp_birthday LIKE '2023-11-12'
or emp_birthday LIKE '2023-11-13'or emp_birthday LIKE '2023-11-14'or emp_birthday LIKE '2023-11-15'or emp_birthday LIKE '2023-11-16'or emp_birthday LIKE '2023-11-17'or emp_birthday LIKE '2023-11-18'or emp_birthday LIKE '2023-11-19'
or emp_birthday LIKE '2023-11-20'or emp_birthday LIKE '2023-11-21'or emp_birthday LIKE '2023-11-22'or emp_birthday LIKE '2023-11-23'or emp_birthday LIKE '2023-11-24'or emp_birthday LIKE '2023-11-25'or emp_birthday LIKE '2023-11-26'
or emp_birthday LIKE '2023-11-27'or emp_birthday LIKE '2023-11-28'or emp_birthday LIKE '2023-11-29'or emp_birthday LIKE '2023-11-30'";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$m11=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_birthday LIKE '2023-12-01' or emp_birthday LIKE '2023-12-02' or emp_birthday LIKE '2023-12-03'or emp_birthday LIKE '2023-12-04'or emp_birthday LIKE '2023-12-05'
or emp_birthday LIKE '2023-12-06'or emp_birthday LIKE '2023-12-07'or emp_birthday LIKE '2023-12-08'or emp_birthday LIKE '2023-12-09'or emp_birthday LIKE '2023-12-10'or emp_birthday LIKE '2023-12-11'or emp_birthday LIKE '2023-12-12'
or emp_birthday LIKE '2023-12-13'or emp_birthday LIKE '2023-12-14'or emp_birthday LIKE '2023-12-15'or emp_birthday LIKE '2023-12-16'or emp_birthday LIKE '2023-12-17'or emp_birthday LIKE '2023-12-18'or emp_birthday LIKE '2023-12-19'
or emp_birthday LIKE '2023-12-20'or emp_birthday LIKE '2023-12-21'or emp_birthday LIKE '2023-12-22'or emp_birthday LIKE '2023-12-23'or emp_birthday LIKE '2023-12-24'or emp_birthday LIKE '2023-12-25'or emp_birthday LIKE '2023-12-26'
or emp_birthday LIKE '2023-12-27'or emp_birthday LIKE '2023-12-28'or emp_birthday LIKE '2023-12-29'or emp_birthday LIKE '2023-12-30'or emp_birthday LIKE '2023-12-31'";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$m12=mysqli_num_rows($result);

//--------------------------เดือน------------------------------//
$sql = "SELECT * FROM `employee` WHERE emp_adr LIKE '1.ยกเลิกหมายเลขทรศ' ";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$numchang=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_adr LIKE '2.IP PHONE Sim' ";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$numpa=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_adr LIKE '3.Fiber' ";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$numsa=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_adr LIKE '4.IP PHONE Fiber'  ";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$numpong=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_adr LIKE '5.ADS'  ";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$num5=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_adr LIKE '6.Wireless Net'  ";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$num6=mysqli_num_rows($result);

$sql = "SELECT * FROM `employee` WHERE emp_adr LIKE '7.อื่นๆ'  ";
$result = $con->query($sql);

$result = mysqli_query($con, $sql) or die(mysqli_error());
$num7=mysqli_num_rows($result);
?>

<script>

    var chartBar_Data = {
    labels: ['1.ยกเลิกหมายเลขทรศ', '2.IP PHONE Sim', '3.Fiber', '4.IP PHONE Fiber','5.ADSL','6.Wireless Net','7.อื่นๆ'],
    datasets: [{
    label: 'Count of Votes',
    data: [<?php echo $numchang; ?>,<?php echo $numpa; ?>,<?php echo $numsa; ?>,<?php echo $numpong; ?>,<?php echo $num5; ?>,<?php echo $num6; ?>,<?php echo $num7; ?>],
    backgroundColor: ['red','blue','yellow','green','orange','purple','pink'],

    borderWidth: 3
}]
}
var chartBar = document.getElementById('chartBar').getContext('2d');
if (chartBar) {
new Chart(chartBar, {
    type: 'bar',
    data: chartBar_Data,
    options: {
    scales: {
        yAxes: [{
        ticks: {
            beginAtZero: true
        }
        }]
    }
    }
});
}
No
</script>

<script>

    var chartPie_Data = {
    labels: ['Active', 'Inactive'],
    datasets: [{
    label: 'Count of Votes',
    data: [<?php echo $numO; ?>,<?php echo $numE; ?>],
    backgroundColor: ['green','red'],
    
    borderWidth: 3
}]
}
var chartPie = document.getElementById('chartpie').getContext('2d');
if (chartPie) {
new Chart(chartPie, {
    type: 'pie',
    data: chartPie_Data,
    options: {
    scales: {
        yAxes: [{
        ticks: {
            beginAtZero: true
        }
        }]
    }
    }
});
}
No
</script>
<script>
    var chartBar_Data = {
    labels: ['มกราคม', 'กุมพาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน' , 'ตุลาคม' , 'พฤศจิกายน','ธันวาคม'],
    datasets: [{
    label: 'Count of Votes',
    data: [<?php echo $m1; ?>,<?php echo $m2; ?>,<?php echo $m3; ?>,<?php echo $m4; ?>,<?php echo $m5; ?>,<?php echo $m6; ?>,<?php echo $m7; ?>,<?php echo $m8; ?>
    ,<?php echo $m9; ?>,<?php echo $m10; ?>,<?php echo $m11; ?>,<?php echo $m12; ?>],
    backgroundColor: ['red','blue','yellow','green','orange','purple','pink','blue','yellow','green','orange','purple'],
    borderWidth: 3
}]
}
var chartBar = document.getElementById('chartBar1').getContext('2d');
if (chartBar) {
new Chart(chartBar, {
type: 'bar',
data: chartBar_Data,
options: {
    scales: {
    yAxes: [{
        ticks: {
        beginAtZero: true
        }
    }]
    }
}
});
}
No
</script>



