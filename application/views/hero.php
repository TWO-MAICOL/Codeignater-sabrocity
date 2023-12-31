<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title; ?> </title>
    
    <!-- Bootstrap -->
    <link href="public/templates/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/templates/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/templates/gentelella-master/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/templates/gentelella-master/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="public/templates/gentelella-master/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="public/templates/gentelella-master/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="public/templates/gentelella-master/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="public/templates/gentelella-master/build/css/custom.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
    rel="stylesheet">

<!-- FILE STYLES -->
 <?php 
    if (isset($style)) {
         for ($i=0; $i < count($style); $i++) { 
             echo $style[$i];
        }
     }
?>

  </head>
  <body class="nav-md">
    <div class="container body ">
      <div class="main_container ">

 