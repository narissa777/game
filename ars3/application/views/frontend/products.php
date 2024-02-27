  <?php $this->load->view('frontend/include/header'); ?>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/products.css">

  <body>
    <nav class="social">
      <ul>
        <li><a href="<?php echo $social[0]->s_whatsapp;?>">Whatsapp <i class="fa fa-whatsapp"></i></a></li>
        <li><a href="<?php echo $social[0]->s_instagram;?>">instagram <i class="fa fa-instagram"></i></a></li>
        <li><a href="mailto:<?php echo $social[0]->s_mail;?>">Mail <i class="fa fa-google"></i></a></li>
        <li><a href="<?php echo $social[0]->s_facebook;?>">Facebook <i class="fa fa-facebook"></i></a></li>
      </ul>
    </nav>

    <!-- -----ÜRÜN SERGİLEME------ -->
    <section>
     <div class="product-heading boyutt">
      <div class="hricin">
        <h1 ><?php echo $baslik[0]->b_urunler; ?></h1>
        <hr style="width:500px;">
      </div> 
    </div>

    <div class="yapi">
      <?php foreach ($urunler as $urunlerogeleri) {?>
        <div class="container shoe">
          <div class="productImage shoeImg" style="
          background-image: url(<?= base_url('') . $urunlerogeleri->u_image; ?>); background-color: black;"></div>

          <div class="color shirtColor">
           <a href="<?php echo base_url('admin/productdetail').'/'.$urunlerogeleri->id; ?>" style="color: whitesmoke;background-color: red;padding: 20px;border-radius: 21px;position: absolute;
            right: -10px;">Detay</a>
          </div>
          <div class="productName shoeName">
           <?php echo $urunlerogeleri->u_baslik; ?>
         </div>
       </div>

     <?php } ?>
   </div>
 </section>

 <!-- -----ÜRÜN SERGİLEME BİTİŞ------ -->
 <!-- ----Katalog---- -->
 < <div class="product-heading">
  <div class="hricin">
    <h1 ><?php echo $baslik[0]->b_katalog; ?></h1>
    <hr style="width:500px;">
  </div> 
</div>
<div style="display:flex; justify-content:center; text-align: center;">
  <div style="position:relative;padding-top:0;width:100%;height:900px;"><iframe style="position:absolute;border:none;width:100%;height:100%;left:0;top:0;" src="https://online.fliphtml5.com/mpctp/mwjw/"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe></div></div>
  <!-- ----Katalog Bitiş---- -->



  <!-- ----footer bölümü----- -->
  <?php $this->load->view("frontend/include/footer"); ?>

