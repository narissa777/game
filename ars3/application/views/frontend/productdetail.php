  <?php $this->load->view('frontend/include/header'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/productdetail.css">

  <body>

      <nav class="social">
          <ul>
            <li><a href="<?php echo $social[0]->s_whatsapp;?>">Whatsapp <i class="fa fa-whatsapp"></i></a></li>
            <li><a href="<?php echo $social[0]->s_instagram;?>">instagram <i class="fa fa-instagram"></i></a></li>
            <li><a href="mailto:<?php echo $social[0]->s_mail;?>">Mail <i class="fa fa-google"></i></a></li>
            <li><a href="<?php echo $social[0]->s_facebook;?>">Facebook <i class="fa fa-facebook"></i></a></li>
        </ul>
    </nav>
    <!-- product section -->
    <section class="product-container">
        <!-- left side -->
        <div class="img-card">
           <img src="<?php echo base_url('').$urunler->u_image; ?>" alt="" id="featured-image">
           <!-- small img -->
           <div class="small-Card">
              <img src="<?php echo base_url('').$urunler->u_image; ?>" alt="" class="small-Img">
              <img src="<?php echo base_url('').$urunler->u_image1; ?>" alt="" class="small-Img">
              <img src="<?php echo base_url('').$urunler->u_image2; ?>" alt="" class="small-Img">
              <img src="<?php echo base_url('').$urunler->u_image3; ?>" alt="" class="small-Img">
          </div>
      </div>
      <!-- Right side -->
      <div class="product-info">
       <h3><?php echo $urunler->u_baslik; ?> </h3>
       <!-- <h5>Ürün Fiyatı: $399 <del>$500</del></h5> -->
       <p><?php echo $urunler->u_aciklama; ?></p>

       



       <div class="quantity">
           <button>TALEP ET</button>
       </div>
   </div>
</section>
<!-- ----footer bölümü----- -->
<script type="text/javascript" src="<?php echo base_url("assets/front/js/productdetail.js"); ?>"></script>
<?php $this->load->view("frontend/include/footer"); ?>
