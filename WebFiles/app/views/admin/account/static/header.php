<?php 
$sql_check = $db->prepare("SELECT * FROM `ayar`");
$sql_check->execute();
$sonuc = $sql_check->fetch();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $sonuc["site_ismi"]; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/public/default/img/cdn/logo.svg" rel="icon">
  <link href="/public/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="/public/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/public/admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/public/admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/public/admin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/public/admin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/public/admin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/public/admin/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="/public/admin/css/style.css" rel="stylesheet">

</head>

<body>