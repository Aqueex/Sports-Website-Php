<?php 
if(!isset($_SESSION['uidd'])){
    @header("location:/admin/login");
}

$sql_check = $db->prepare("SELECT * FROM `ayar`");
$sql_check->execute();
$sonuc = $sql_check->fetch();
$ayarlar = $sql_check->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $sonuc["site_ismi"]; ?></title>
  <meta content="" name="description">
  <meta content="fparena" name="keywords">

  <!-- Favicons -->
  <link href="/public/default/img/cdn/logo.svg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/public/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
  <link href="/public/admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/public/admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/public/admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/public/admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/public/admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/public/admin/vendor/simple-datatables/style.css" rel="stylesheet">


  <link href="/public/admin/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/admin" class="logo d-flex align-items-center">
        <!-- <img src="/public/admin/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block"><?php echo $sonuc["site_ismi"]; ?></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   

  </header><!-- End Header -->