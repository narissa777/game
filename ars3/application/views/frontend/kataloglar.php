  <?php $this->load->view('frontend/include/header'); ?>
  <?php $dil=$this->uri->segment(3);?>
  <?php $lang = language::query("SELECT * FROM language WHERE dil_id ='$dil'"); ?>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/catalog.css">

  <body>

      <nav class="social">
          <ul>
            <li><a href="<?php echo $social[0]->s_whatsapp;?>">Whatsapp <i class="fa fa-whatsapp"></i></a></li>
            <li><a href="<?php echo $social[0]->s_instagram;?>">instagram <i class="fa fa-instagram"></i></a></li>
            <li><a href="mailto:<?php echo $social[0]->s_mail;?>">Mail <i class="fa fa-google"></i></a></li>
            <li><a href="<?php echo $social[0]->s_facebook;?>">Facebook <i class="fa fa-facebook"></i></a></li>
        </ul>
    </nav>
    <section class="bottom">
        <div class="product-heading boyutt" >
            <div class="hricin">
                <h1 ><?php echo $lang[8]->name;?></h1>
                <hr style="width:500px;">
            </div> 
        </div>

        
        <div class="bigcard">
            <?php foreach ($katalog as $katalogogeleri): ?>
                <div class="pdfview">
                    <?php
                    $dosya_adi = $katalogogeleri->k_dosya;
                    ?>
                    <a href="<?php echo '../'.$dosya_adi; ?>" download="<?php echo $katalogogeleri->k_baslik.'.pdf'; ?>">
                        <p style="padding:10px;">İndirmek için tıklayınız</p>
                        <img style="width:100%;" src="<?php echo base_url("assets/") ?>img/pdf.png" alt="W3Schools" width="104" height="142">
                    </a>
                    <h1 style="padding:10px;"><?php echo $katalogogeleri->k_baslik; ?></h1>
                </div>
            <?php endforeach; ?>
        </div>






    </section>


    <!-- ----footer bölümü----- -->
    <?php $this->load->view("frontend/include/footer"); ?>