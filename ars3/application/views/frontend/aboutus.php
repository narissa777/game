  <?php $this->load->view('frontend/include/header'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/aboutus.css">

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
    <!-- ---hakkimizda---- -->
    <section>
     <div class="product-heading boyutt" >
      <div class="hricin">
        <h1 ><?php echo $lang[7]->name;?></h1>
        <hr style="width:500px;">
      </div> 
    </div>

      <div class="aboutduz">

        <div class="makineimg">
          <img src="<?php echo base_url('').$about[0]->h_foto1; ?>">
        </div>
        <div style="display: flex;
        gap: 60px;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        align-content: center;">
        <div style="display:flex; gap: 30px; flex-direction: column; flex-wrap: wrap;">

          <div class="aboutyazi" style="max-width: 750px;">

            <h3><?php echo $about[0]->h_baslik1; ?></h3>
            <span><?php echo $about[0]->h_aciklama1; ?></span>
          </div>
          <div style="    display: flex;
          gap: 30px;
          flex-direction: row;
          flex-wrap: wrap;
          align-content: center;
          justify-content: center;
          align-items: center;">
          <div class="aboutyazi">
            <h3><?php echo $about[0]->h_baslik2; ?></h3>
            <span><?php echo $about[0]->h_aciklama2; ?></span>
          </div>
          <div class="aboutyazi">
            <h3><?php echo $about[0]->h_baslik3; ?></h3>
            <span><?php echo $about[0]->h_aciklama3; ?></span>
          </div>
        </div>
      </div>

    </div>
    <div>
      <img style="transform: scaleX(-1);" src="<?php echo base_url('').$about[0]->h_foto1; ?>">
    </div>
  </div>
</section>
<!-- ----footer bölümü----- -->
<?php $this->load->view("frontend/include/footer"); ?>
