<!DOCTYPE html>
<html lang="en" style=" overflow-x: hidden;">
<head>
  <?php $dil=$this->uri->segment(3);?>
  <?php $lang = language::query("SELECT * FROM language WHERE dil_id ='$dil'"); ?>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ars Game</title>
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/header.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/footer.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/social.css">
</head>
<!-- ----Header---- -->
<div class="page-header">
  <div class="logo" style="height: 120px; width: 140px;">
    <img src="<?php echo base_url("assets/img/ars.ico"); ?>" >
  </div>
  <a id="menu-icon" class="menu-icon" onclick="onMenuClick()">
    <i class="fa fa-bars"></i>
  </a>
  <div>
    <div class="always">
      <i style="font-family: cursive; font-size: 15px;">ALWAYS DIFFERENT</i>
    </div>
    <div id="navigation-bar" class="nav-bar">

      <a href="<?php echo base_url("Admin/index/").$dil; ?>" ><?php echo $lang[4]->name;?></a>
      <a href="<?php echo base_url("Admin/cokyakinda/").$dil; ?>" ><?php echo $lang[5]->name;?></a>
      <a href="<?php echo base_url("Admin/category/").$dil; ?>" ><?php echo $lang[6]->name;?></a>
      <!-- <a href="<?php echo base_url("Admin/products/"); ?>" >Ürünlerimiz</a> -->
      <a href="<?php echo base_url("Admin/aboutus/").$dil; ?>" title="hakkimizda"><?php echo $lang[7]->name;?></a>
      <a href="<?php echo base_url("Admin/catalog/").$dil; ?>" title="Kataloglar"><?php echo $lang[8]->name;?></a>
      <a href="<?php echo base_url("Admin/fuarlar/").$dil; ?>" title="Fuarlar"><?php echo $lang[9]->name;?></a>
      <a style="border-right: 2px solid #999;" href="<?php echo base_url("Admin/contact/").$dil; ?>" ><?php echo $lang[10]->name;?></a>
    </div>

  </div>
  <div class="oyunlugun">
    <h5 style="font-family: cursive;">``<?php echo $lang[11]->name;?>``</h5>
  </div>
</div>
<!-- ----HEADER BITIS---- -->
