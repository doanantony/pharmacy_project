<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book My Pharmacy</title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/template.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/pharmacy.css">
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
  </script>

</head>
<body>

<div class="header">
  <a href="<?php echo base_url('home'); ?>" class="logo">CompanyLogo</a>
  <div class="header-right">
    <a class="<?php echo get_active('home'); ?>" href="<?php echo base_url('home'); ?>">Home</a>
    <a class="<?php echo get_active('register'); ?>" href="<?php echo base_url('register'); ?>">Pharmacy</a>
    <a class="<?php echo get_active('about'); ?>" href="<?php echo base_url('about'); ?>">About</a>
    <a class="<?php echo get_active('contact_us'); ?>" href="<?php echo base_url('contact_us'); ?>">Contact</a>
  </div>
</div>



