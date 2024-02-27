  <?php $this->load->view('frontend/include/header'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/contactcard.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/"); ?>css/contact.css">
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
  <div class="product-heading boyutt">
    <div class="hricin">
      <h1 ><?php echo $lang[10]->name;?></h1>
      <hr style="width:500px;">
    </div> 
  </div>
  <div class="container1">
    <div class="panel">
      <div class="ring">
        <div class="card card1"></div>
        <div class="border">
          <p class="title"></p>
          <div class="slide">
            <h6 style="color: #fff; font-size: 21px; font-weight: bold; z-index: 500; text-align: center;">Telefon Numaralarımız</h6>
            <div class="line">
              <h5 class="para">Murat Şahin:</h5>
              <a style="color: burlywood; font-size: 18px; font-weight: bold;z-index: 500;"><?php echo $contact[0]->telefon1; ?></a>
            </div>
            <div class="line">
             <h5 class="para">Mehmet Ali:</h5>
             <a style="color: burlywood; font-size: 18px; font-weight: bold; z-index: 500;"><?php echo $contact[0]->telefon2; ?></a>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="panel">
    <div class="ring">
      <div class="card card2"></div>
      <div class="border">
        <p class="title"></p>
        <div class="slide">
          <h6 style="color: #fff; font-size: 21px; font-weight: bold; z-index: 500; text-align: center;">Email Adresimiz</h6>
          <div class="line">
           <h5 class="para">E-mail:</h5>
           <a style="color: burlywood; font-size: 18px; font-weight: bold; z-index: 500;"><?php echo $contact[0]->mail; ?></a>
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="panel">
  <div class="ring">
    <div class="card card3"></div>
    <div class="border">
      <p class="title"></p>
      <div class="slide">
        <h6 style="color: #fff; font-size: 21px; font-weight: bold; z-index: 500; text-align: center;">Ofis Adresimiz</h6>
        <div class="line">
          <a style="color: burlywood; font-size: 21px; font-weight: bold; z-index: 500; text-align: center;"><?php echo $contact[0]->adres; ?></a>

        </div>

      </div>
    </div>
  </div>
</div>
</div>
<div class="product-heading">
  <div class="hricin">
    <h1 ><?php echo $lang[24]->name;?></h1>
    <hr style="width:500px;">
  </div> 
</div>
<div class="container">
  <div class="row">

    <div class="column">
      <form action="<?php echo base_url('Talep/talepet'); ?>" role="form" method="POST" enctype= "multipart/form-data">
        <div class="formcard">
          <label for="fname"><?php echo $lang[25]->name;?></label>
          <input type="text" id="fname" name="name" placeholder="Adınız Soyadınız..">
          <label for="fname"><?php echo $lang[26]->name;?></label>
          <input type="text" id="fname" name="email" placeholder="deneme@deneme.com..">
          <label for="fname"><?php echo $lang[27]->name;?></label>
          <input type="text" id="fname" name="telephone" placeholder="Telefon Numaraniz..">
          <label for="country"><?php echo $lang[28]->name;?></label>
          <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
            <option value="turkiye">Türkiye</option>
            <option value="azerbaycan">Azerbaycan</option>
          </select>
          <label for="adress"><?php echo $lang[29]->name;?></label>
          <textarea id="adress" name="adress" placeholder="Adresinizi Giriniz.." style="height:170px"></textarea>
          <label for="details"><?php echo $lang[30]->name;?></label>
          <textarea id="details" name="details" placeholder="Buraya Yazınız.." style="height:170px"></textarea>
          <input type="submit" value="<?php echo $lang[31]->name;?>">
        </div>
      </form>
    </div>
    <div >
      <iframe class="width" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3160.698682449608!2d28.953994075875723!3d37.60924997202758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzfCsDM2JzMzLjMiTiAyOMKwNTcnMjMuNyJF!5e0!3m2!1sen!2str!4v1702047377780!5m2!1sen!2str" width="600" height="450" style="border:0; z-index:1001;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>
<!-- ----footer bölümü----- -->
<?php $this->load->view("frontend/include/footer"); ?>
