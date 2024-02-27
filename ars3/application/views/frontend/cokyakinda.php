 <?php $this->load->view('frontend/include/header'); ?>
 <?php $dil=$this->uri->segment(3);?>
  <?php $lang = language::query("SELECT * FROM language WHERE dil_id ='$dil'"); ?>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/newrecent.css">

 <body>
   <nav class="social">
    <ul>
      <li><a href="<?php echo $social[0]->s_whatsapp;?>">Whatsapp <i class="fa fa-whatsapp"></i></a></li>
      <li><a href="<?php echo $social[0]->s_instagram;?>">instagram <i class="fa fa-instagram"></i></a></li>
      <li><a href="mailto:<?php echo $social[0]->s_mail;?>">Mail <i class="fa fa-google"></i></a></li>
      <li><a href="<?php echo $social[0]->s_facebook;?>">Facebook <i class="fa fa-facebook"></i></a></li>
    </ul>
  </nav>
  <section>
   <div class="product-heading boyutt">
    <div class="hricin">
      <h1 ><?php echo $lang[5]->name;?></h1>
      <hr style="width:500px;">
    </div> 
  </div>
  
  <div class="bigcard">
  <?php foreach ($cokyakinda as $cokyakindaogeleri) {?>
   <div class="smallcard">
    <h1 class="smallcardh1"><?php echo $cokyakindaogeleri->c_urunadi; ?></h1>
    <div class="object3">

     <div class="">
      <img  src="<?= base_url('') . $cokyakindaogeleri->c_resim; ?>" width="300" height="300">
    </div>
    <div class="object2">
      <span><?php echo $cokyakindaogeleri->c_aciklama; ?></span>
    </div>

  </div>
  <div style="display:flex; text-align:center; justify-content:center; align-items: center;">
    <img class="tirnak" src="<?php echo base_url("assets/") ?>img/tirnak.png"> <h1 class="h1boyut"><?php echo $cokyakindaogeleri->c_soon; ?></h1>
  </div>
</div>
<?php } ?>
</div>


</section>


<!-- ----footer bölümü----- -->
<?php $this->load->view("frontend/include/footer"); ?>