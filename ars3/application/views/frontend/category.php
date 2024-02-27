  <?php $this->load->view('frontend/include/header'); ?>
  
  <?php $dil=$this->uri->segment(3);?>
  <?php $lang = language::query("SELECT * FROM language WHERE dil_id ='$dil'"); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/") ?>css/category.css">


  <body>
  	<nav class="social">
  		<ul>
  			<li><a href="<?php echo $social[0]->s_whatsapp;?>">Whatsapp <i class="fa fa-whatsapp"></i></a></li>
  			<li><a href="<?php echo $social[0]->s_instagram;?>">instagram <i class="fa fa-instagram"></i></a></li>
  			<li><a href="mailto:<?php echo $social[0]->s_mail;?>">Mail <i class="fa fa-google"></i></a></li>
  			<li><a href="<?php echo $social[0]->s_facebook;?>">Facebook <i class="fa fa-facebook"></i></a></li>
  		</ul>
  	</nav>

  	<div class="product-heading boyutt" >
  		<div class="hricin">
  			<h1 ><?php echo $language[6]->name;?></h1>
  			<hr style="width:500px;">
  		</div> 
  	</div>
  	<section class="sectionduzen">
  		<div class="cardbodyduzen">
  			<?php foreach ($kategoriler as $kategori) {?>
  			<div class="" style="    height: 100%;
  			width: 400px;">
  			<div class="card">
  				<div class="cover" style="background-image: url('<?php 	echo base_url($kategori->k_resim); ?>');">

  					<h1><?php echo $kategori->k_ad; ?></h1>
  					<div class="card-back">
  						<a href="<?php echo base_url('admin/products/'.$kategori->id) ?>">Görüntüle</a>
  					</div>
  				</div>
  			</div>
  		</div>
  	<?php } ?>
  		
  	</div>
  </section>

  <!-- ----footer bölümü----- -->
  <?php $this->load->view("frontend/include/footer"); ?>
