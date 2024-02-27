<?php $dil=$this->uri->segment(3);?>
  <?php $lang = language::query("SELECT * FROM language WHERE dil_id ='$dil'"); ?>
<!-- ----footer bölümü----- -->
<section>
 <div class="footer">

  <div class="footerduzen">
    <div class="footeronecikan">

      <div>
        <h1><?php echo $lang[15]->name;?></h1>
        <hr style="margin:5px;">
      </div>

      <a href="#" style="font-size: 20px; color: white;" ><?php echo $lang[16]->name;?></a>
      <a href="#" style="font-size: 20px; color: white;"><?php echo $lang[17]->name;?></a>
      <a href="#" style="font-size: 20px; color: white;"><?php echo $lang[18]->name;?></a>
      <a href="#" style="font-size: 20px; color: white;" ><?php echo $lang[19]->name;?></a>
    </div>

    <div><img src="<?php echo base_url("assets/img/ars.ico") ?>" height="162">
      <div class="footerkisayol">
       <!--  <h1>Hızlı Link</h1>
        <hr> -->
        <div style="    display: flex;
        flex-wrap: wrap;
        align-content: center;
        align-items: center;
        justify-content: space-around;
        gap: 15px;
        flex-direction: row-reverse;
        margin-right: 24px;">
        <div>
          <a href="<?php echo base_url("");?>" target="_blank" style="margin: 10px;"><?php echo $lang[4]->name;?></a>
          <a href="<?php echo base_url("Admin/category");?>" target="_blank"><?php echo $lang[6]->name;?></a>
        </div>
        <div>
          <a href="<?php echo base_url("Admin/products"); ?>" target="_blank" style="margin: 10px;"><?php echo $lang[5]->name;?></a>
          <a href="<?php echo base_url("Admin/fuarlar"); ?>" target="_blank"><?php echo $lang[9]->name;?></a>
        </div>

      </div>
    </div>
  </div>
  <div class="footeraddress">
    <div>
      <h1><?php echo $lang[20]->name;?></h1>
      <hr>
    </div>
    <div><iconify-icon icon="zondicons:location" style="color: red;" width="30"></iconify-icon> <span>İncilipınar Mahallesi 1204 sokak No:3/A Pamukkale/Denizli</span></div>
    <div><iconify-icon icon="emojione-monotone:telephone" style="color: red;" width="30"></iconify-icon> <span>0 (555) 555 55 55</span></div>
    <div><iconify-icon icon="mdi:gmail" style="color: red;" width="30"></iconify-icon><span> info@arsgame.com</span></div>
    <div >
      <a href="<?php echo $social[0]->s_facebook;?>" class="fa fa-facebook"></a>
      <a href="mailto:<?php echo $social[0]->s_mail;?>" class="fa fa-google"></a>
      <a href="<?php echo $social[0]->s_instagram;?>" class="fa fa-instagram"></a>
      <a href="<?php echo $social[0]->s_whatsapp;?>" class="fa fa-whatsapp"></a>
    </div>
  </div>


</div>

</div>
</section>

    <script type="text/javascript">
      function onMenuClick() {
        var navbar = document.getElementById("navigation-bar");
        var responsive_class_name = "responsive";

        navbar.classList.toggle(responsive_class_name);
      }
    </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  </body>
  </html>