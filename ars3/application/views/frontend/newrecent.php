  <?php $this->load->view('frontend/include/header'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/newrecent.css">
  <?php $dil=$this->uri->segment(3);?>
  <?php $lang = language::query("SELECT * FROM language WHERE dil_id ='$dil'"); ?>
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
        <h1 ><?php echo $lang[9]->name;?></h1>
        <hr style="width:500px;">
      </div> 
    </div>
    <div class="bigcard">
      <?php foreach ($fuar as $fuarogeleri) {?>
       <div class="smallcard">
        <h1 class="smallcardh1"><?php echo $fuarogeleri->f_baslik1; ?></h1>
        <div class="object1">

         <div class="imagediv">
          <img  src="<?= base_url('') . $fuarogeleri->f_resim; ?>">
        </div>
        <div class="object2">
          <h1><?php echo $fuarogeleri->f_baslik2; ?></h1>
          <span><?php echo $fuarogeleri->f_aciklama; ?></span>
        </div>
        <div>
          <img class="tirnak" src="<?php echo base_url("assets/") ?>img/tirnak.png">
        </div>
      </div>
    </div>
  <?php } ?>

</div>
</section>


<!-- ----footer bölümü----- -->
<?php $this->load->view("frontend/include/footer"); ?>
