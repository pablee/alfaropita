<!DOCTYPE html>
<html lang="en">
<head>
  <title>Diseña tu ropita</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--script type="text/javascript" src="<?php echo base_url(); ?>scripts/crop.js" ></script-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
  <script src="<?php echo base_url(); ?>scripts/canvas2image.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>scripts/alfaropita.js" ></script>
  <script src="<?php echo base_url(); ?>scripts/print.js"></script>

  <link href="<?php echo base_url(); ?>css/app.css" rel="stylesheet">


  <!--FINECROP-->
  <!--link href="<?php echo base_url(); ?>scripts/crop/css/fineCrop.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>scripts/crop/css/layout.css" rel="stylesheet">
  <!--script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script-->
  <!--script src="<?php echo base_url(); ?>scripts/crop/js/fineCrop.js"></script-->

  <!--RESIZE AND CROP-->
  <!--script type="text/javascript" src="<?php echo base_url(); ?>scripts/crop_resize/jquery.resizeImage.test.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>scripts/crop_resize/pilote.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>scripts/crop_resize/style.css" type="text/css"-->

  <!--CROPPIE-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>scripts/croppie/croppie.css" />
  <script src="<?php echo base_url(); ?>scripts/croppie/croppie.js"></script>


</head>

<body class="site" onload="verImagenesPrecargadas()">