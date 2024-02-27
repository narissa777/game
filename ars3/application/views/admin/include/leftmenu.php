<style type="text/css">
  .nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    align-items: center;
  }
  .nav-item{
    background-color: #f5f5f591;
  }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#212529;">
  <!-- Brand Logo -->
  <a class="brand-link">
    <img src="<?php echo base_url('assets/front/assets/images/logo/Pay2Gold.png'); ?>" alt="" class="brand-image" style="opacity: .8;">
    <span class="brand-text font-weight-light">ARSGAME</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar" >
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-3">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="<?php echo base_url('admin/panel'); ?>" class="nav-link <?php active('panel'); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                ADMİN PANELİ
              </p>
            </a>
          </li>

          <!-- *********************************************************************************************************** -->
          <!-- site yönetim kısmı başlangıç -->
          <li class="nav-item" style="background-color:#3f6791; margin: 5px; border: solid;">
            <a href="#" class="nav-link <?php active('readmoreaddview'); ?> <?php active('readmoreshowview'); ?>">
             <i class="fas fa-fist-raised"></i>
             <p>
              Site Yonetimi
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" >
        
        
        
      <li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
        <a href="#" class="nav-link <?php active('sliderekleview'); ?>">
         <i class="fas fa-sliders-h"></i>
         <p  style="color:black;">
          Slider 
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
       <li class="nav-item">
        <a href="<?php echo base_url('Admin/sliderekleview'); ?>" class="nav-link <?php active('sliderekleview'); ?>">
          <i class="far fa-circle nav-icon"></i>
          <p  style="color:black;">Slider Ekle </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url('Admin/slidergoruntule'); ?>" class="nav-link <?php active('slidershowview'); ?>">
          <i class="far fa-circle nav-icon"></i>
          <p  style="color:black;">Slider Görüntüle </p>
        </a>
      </li>
    </ul>
    
    
</li>
<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="#" class="nav-link <?php active('sirkethakkindaaddview'); ?> <?php active('communicationview'); ?> <?php active('socialview'); ?> <?php active('sirketshowview'); ?>">
   <i class="fas fa-shoe-prints"></i>   <p  style="color:black;">
    Ürünler
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
 <li class="nav-item">
  <a href="<?php echo base_url('Admin/urunlerekleindex'); ?>" class="nav-link <?php active('urunlerekleindex'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p  style="color:black;">Ürünler Ekle </p>
  </a>
</li>
<li class="nav-item">
  <a href="<?php echo base_url('Admin/urunlergoruntule'); ?>" class="nav-link <?php active('urunlergoruntule'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p  style="color:black;">Ürünler Görüntüle </p>
  </a>
</li>
</ul>
</li>

<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="#" class="nav-link <?php active('sirkethakkindaaddview'); ?> <?php active('communicationview'); ?> <?php active('socialview'); ?> <?php active('sirketshowview'); ?>">
   <i class="fas fa-shoe-prints"></i>   <p  style="color:black;">
    Çok Yakında
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
 <li class="nav-item">
  <a href="<?php echo base_url('Admin/cokyakindaekleindex'); ?>" class="nav-link <?php active('cokyakindaekleindex'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p  style="color:black;">Çok Yakında Ekle </p>
  </a>
</li>
<li class="nav-item">
  <a href="<?php echo base_url('Admin/cokyakindagoruntule'); ?>" class="nav-link <?php active('urunlergoruntule'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p  style="color:black;">Çok Yakında Görüntüle </p>
  </a>
</li>
</ul>
</li>

<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="#" class="nav-link <?php active('sirkethakkindaaddview'); ?> <?php active('communicationview'); ?> <?php active('socialview'); ?> <?php active('sirketshowview'); ?>">
   <i class="fas fa-shoe-prints"></i>   <p  style="color:black;">
    Kategoriler
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
 <li class="nav-item">
  <a href="<?php echo base_url('Admin/kategorilerekleindex'); ?>" class="nav-link <?php active('cokyakindaekleindex'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p  style="color:black;">Kategoriler Ekle</p>
  </a>
</li>
<li class="nav-item">
  <a href="<?php echo base_url('Admin/kategorilergoruntule'); ?>" class="nav-link <?php active('urunlergoruntule'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p  style="color:black;">Kategoriler Görüntüle </p>
  </a>
</li>
</ul>
</li>

<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="#" class="nav-link <?php active('fuargoruntule'); ?> <?php active('communicationview'); ?> <?php active('socialview'); ?> <?php active('sirketshowview'); ?>">
   <i class="fas fa-shoe-prints"></i>   <p  style="color:black;">
    Fuar
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
 <li class="nav-item">
  <a href="<?php echo base_url('Admin/fuarekleindex'); ?>" class="nav-link <?php active('fuargoruntule'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p  style="color:black;">Fuar Ekle </p>
  </a>
</li>
<li class="nav-item">
  <a href="<?php echo base_url('Admin/fuargoruntule'); ?>" class="nav-link <?php active('fuarekleindex'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p  style="color:black;">Fuar Görüntüle </p>
  </a>
</li>
</ul>
</li>


<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="#" class="nav-link <?php active('fuargoruntule'); ?> <?php active('communicationview'); ?> <?php active('socialview'); ?> <?php active('sirketshowview'); ?>">
   <i class="fas fa-shoe-prints"></i>   <p  style="color:black;">
    Kataloglar
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
 <li class="nav-item">
  <a href="<?php echo base_url('Admin/katalogekleindex'); ?>" class="nav-link <?php active('katalogekleindex'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p  style="color:black;">Katalog Ekle </p>
  </a>
</li>
<li class="nav-item">
  <a href="<?php echo base_url('Admin/kataloggoruntule'); ?>" class="nav-link <?php active('kataloggoruntule'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p  style="color:black;">Katalog Görüntüle </p>
  </a>
</li>
</ul>
</li>

<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="<?php echo base_url('Admin/baslikduzenleindex'); ?>" class="nav-link <?php active('baslikduzenleindex'); ?>">
   <i class="fas fa-comments"></i>
   <p  style="color:black;">Baslik Düzenle</p>
 </a>
</li>

<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="<?php echo base_url('Admin/socialduzenleindex'); ?>" class="nav-link <?php active('socialduzenleindex'); ?>">
   <i class="fas fa-comments"></i>
   <p  style="color:black;">Sosyal Medya Düzenle</p>
 </a>
</li>

<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="<?php echo base_url('Admin/nedenbizindex'); ?>" class="nav-link <?php active('nedenbizindex'); ?>">
   <i class="fas fa-comments"></i>
   <p  style="color:black;">Neden Biz</p>
 </a>
</li>
<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="<?php echo base_url('Admin/hakkimizdaindex'); ?>" class="nav-link <?php active('hakkimizdaindex'); ?>">
   <i class="fas fa-comments"></i>
   <p  style="color:black;">Hakkımızda</p>
 </a>
</li>
<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="<?php echo base_url('Admin/contactindex'); ?>" class="nav-link <?php active('contactindex'); ?>">
   <i class="fas fa-comments"></i>
   <p  style="color:black;">İletişim</p>
 </a>
</li>
</ul>
</li>


<!-- site yönetim kısmı bitiş -->
<!-- *********************************************************************************************************** -->
<!-- talepler yönetim kısmı başlangıç -->


<!-- <li class="nav-item" style="background-color:#3f6791; margin: 5px; border: solid;">
  <a href="#" class="nav-link <?php active('readmoreaddview'); ?> <?php active('readmoreshowview'); ?>">
   <i class="fas fa-fist-raised"></i>
   <p>
    Talepler
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
  <li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
    <a href="#" class="nav-link <?php active('cekimtalepleri'); ?> <?php active('yatirimtalepleri'); ?>">
     <i class="fas fa-comment-dollar"></i>
     <p style="color:black;">
      Para Talepleri 
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="<?php echo base_url('Admin/cekimtalepleri'); ?>" class="nav-link <?php active('cekimtalepleri'); ?>">
       <i class="fas fa-money-bill-wave"></i>
       <p style="color:black;">Cekim Talepleri</p>
     </a>
   </li>
   <li class="nav-item">
    <a href="<?php echo base_url('Admin/yatirimtalepleri'); ?>" class="nav-link <?php active('yatirimtalepleri'); ?>">
     <i class="fas fa-money-check"></i>
     <p style="color:black;">Yatırım Talepleri</p>
   </a>
 </li>
</ul>
</li>
<li class="nav-item">
  <a href="<?php echo base_url('bizesat/bizesatgoruntule'); ?>" class="nav-link <?php active('bizesatgoruntule'); ?>">
    <i class="fas fa-plus"></i>
    <p style="color:black;">Bize Sat Talepleri</p>
  </a>
</li>
</ul>
</li> -->


<!-- Talepler yönetim kısmı bitiş -->
<!-- *********************************************************************************************************** -->
<!-- boosting yönetim kısmı başlangıç -->


<!-- <li class="nav-item" style="background-color:#3f6791; margin: 5px; border: solid;">
  <a href="#" class="nav-link <?php active('readmoreaddview'); ?> <?php active('readmoreshowview'); ?>">
   <i class="fas fa-fist-raised"></i>
   <p>
    Boosting
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
  <li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
    <a href="#" class="nav-link <?php active('userapprovedshowview'); ?><?php active('stores'); ?><?php active('storeproduct'); ?> <?php active('mystores'); ?>">
      <i class="fas fa-thumbs-up"></i>
      <p style="color:black;">
        MAĞAZA 
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo base_url('Userss/boosmystores'); ?>" class="nav-link <?php active('boosmystores'); ?>">
          <i class="far fa-circle nav-icon"></i>
          <p style="color:black;">MAĞAZAMA GELEN SİPARİŞLER</p>
        </a>
      </li>
    </ul>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo base_url('Product/storeproduct'); ?>" class="nav-link <?php active('storeproduct'); ?>">
          <i class="far fa-circle nav-icon"></i>
          <p style="color:black;">Mağaza Ürünleri</p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
    <a href="#" class="nav-link <?php active('boostinggameekleview'); ?><?php active('boostinggames'); ?>">
     <i class="fas fa-gamepad"></i>
     <p style="color:black;">
      Oyunlar 
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="<?php echo base_url('menu/boostinggameekleview'); ?>" class="nav-link <?php active('boostinggameekleview'); ?>">
        <i class="far fa-circle nav-icon"></i>
        <p style="color:black;">Oyun Ekle</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url('menu/boostinggames'); ?>" class="nav-link <?php active('boostinggames'); ?>">
        <i class="far fa-circle nav-icon"></i>
        <p style="color:black;">Oyun Goruntule</p>
      </a>
    </li>
  </ul>
</li>
<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="#" class="nav-link <?php active('boostingurunler'); ?> <?php active('serverekle'); ?> <?php active('boosingproductaddview'); ?> <?php active('boostingchannelekle'); ?> <?php active('boostingservergoruntule'); ?> <?php active('boostingchannelgoruntule'); ?> <?php active('boostingpopup'); ?>">
   <i class="fas fa-shopping-cart"></i>
   <p style="color:black;">
    ÜRÜNLER 
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
 <li class="nav-item">
  <a href="<?php echo base_url('Product/boosingproductaddview'); ?>" class="nav-link <?php active('boosingproductaddview'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p style="color:black;">Ürün Ekle</p>
  </a>
</li>
<li class="nav-item">
  <a href="<?php echo base_url('Product/boostingurunler'); ?>" class="nav-link <?php active('boostingurunler'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p style="color:black;">Ürün Görüntüle</p>
  </a>
</li> -->

<!-- <li class="nav-item">
  <a href="<?php echo base_url('popup/boostingpopup'); ?>" class="nav-link <?php active('boostingpopup'); ?>">
   <i class="far fa-circle nav-icon"></i>
   <p style="color:black;">Günün Fırsatına Ürün Ekle</p>
 </a>
</li> -->
<!-- <li class="nav-item">
  <a href="<?php echo base_url('Admin/serverekle_boosting'); ?>" class="nav-link <?php active('serverekle_boosting'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p style="color:black;"> Server Ekle Boosting</p>
  </a>
</li>
<li class="nav-item">
  <a href="<?php echo base_url('Admin/boostingservergoruntule'); ?>" class="nav-link <?php active('boostingservergoruntule'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p style="color:black;">Server  Görüntüle</p>
  </a>
</li>
</ul>
</li>
<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="#" class="nav-link <?php active('boostingofferadd'); ?><?php active('offershowview'); ?>">
   <i class="fas fa-tag"></i>
   <p style="color:black;">
    İndirim Tanımla 
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
  <li class="nav-item">
    <a href="<?php echo base_url('offers/offershowview'); ?>" class="nav-link <?php active('offershowview'); ?>">
      <i class="far fa-circle nav-icon"></i>
      <p style="color:black;">İndirim Görüntüle</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="<?php echo base_url('offers/boostingofferadd'); ?>" class="nav-link <?php active('boostingofferadd'); ?>">
      <i class="far fa-circle nav-icon"></i>
      <p style="color:black;">İndirim Ekle</p>
    </a>
  </li>
</ul>
</li>
</ul>
</li> -->


<!-- boosting yönetim kısmı bitiş -->
<!-- *********************************************************************************************************** -->
<!-- gamecurrency yönetim kısmı başlangıç -->


<!-- <li class="nav-item" style="background-color:#3f6791; margin: 5px; border: solid;">
  <a href="#" class="nav-link <?php active('readmoreaddview'); ?> <?php active('readmoreshowview'); ?>">
   <i class="fas fa-fist-raised"></i>
   <p>
    Game Currency
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
  <li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
    <a href="#" class="nav-link <?php active('userapprovedshowview'); ?><?php active('stores'); ?><?php active('storeproduct'); ?> <?php active('mystores'); ?>">
      <i class="fas fa-thumbs-up"></i>
      <p style="color:black;">
        MAĞAZA 
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo base_url('Userss/mystores'); ?>" class="nav-link <?php active('mystores'); ?>">
          <i class="far fa-circle nav-icon"></i>
          <p style="color:black;">MAĞAZAMA GELEN SİPARİŞLER</p>
        </a>
      </li>
    </ul>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo base_url('Product/storeproduct'); ?>" class="nav-link <?php active('storeproduct'); ?>">
          <i class="far fa-circle nav-icon"></i>
          <p style="color:black;">Mağaza Ürünleri</p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
    <a href="#" class="nav-link <?php active('gamecurrencygameekleview'); ?><?php active('gamecurrencygames'); ?>">
     <i class="fas fa-gamepad"></i>
     <p style="color:black;">
      Oyunlar 
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="<?php echo base_url('menu/gamecurrencygameekleview'); ?>" class="nav-link <?php active('gamecurrencygameekleview'); ?>">
        <i class="far fa-circle nav-icon"></i>
        <p style="color:black;">Oyun Ekle</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url('menu/gamecurrencygames'); ?>" class="nav-link <?php active('gamecurrencygames'); ?>">
        <i class="far fa-circle nav-icon"></i>
        <p style="color:black;">Oyun Goruntule</p>
      </a>
    </li>
  </ul>
</li>
<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="#" class="nav-link <?php active('gamecurrencyurunler'); ?><?php active('gamecurrencyproductaddview'); ?> <?php active('serverekle'); ?> <?php active('gamecurrencygameekleview'); ?> <?php active('gamecurrencychannelekle'); ?> <?php active('gamecurrencyservergoruntule'); ?> <?php active('gamecurrencychannelgoruntule'); ?> <?php active('gamecurrencypopup'); ?>">
   <i class="fas fa-shopping-cart"></i>
   <p style="color:black;">
    ÜRÜNLER 
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
 <li class="nav-item">
  <a href="<?php echo base_url('Product/gamecurrencyproductaddview'); ?>" class="nav-link <?php active('gamecurrencyproductaddview'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p style="color:black;">Ürün Ekle</p>
  </a>
</li>
<li class="nav-item">
  <a href="<?php echo base_url('Product/gamecurrencyurunler'); ?>" class="nav-link <?php active('gamecurrencyurunler'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p style="color:black;">Ürün Görüntüle</p>
  </a>
</li> -->

<!-- <li class="nav-item">
  <a href="<?php echo base_url('popup/gamecurrencypopup'); ?>" class="nav-link <?php active('gamecurrencypopup'); ?>">
   <i class="far fa-circle nav-icon"></i>
   <p style="color:black;">Günün Fırsatına Ürün Ekle</p>
 </a>
</li> -->
<!-- <li class="nav-item">
  <a href="<?php echo base_url('Admin/serverekle'); ?>" class="nav-link <?php active('serverekle'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p style="color:black;"> Server Ekle Game Currency</p>
  </a>
</li>
<li class="nav-item">
  <a href="<?php echo base_url('Admin/gamecurrencyservergoruntule'); ?>" class="nav-link <?php active('gamecurrencyservergoruntule'); ?>">
    <i class="far fa-circle nav-icon"></i>
    <p style="color:black;">Server  Görüntüle</p>
  </a>
</li>
</ul>
</li>
<li class="nav-item" style="border: 2px black solid; background-color: #f9faf875;">
  <a href="#" class="nav-link <?php active('gamecurrencyofferadd'); ?><?php active('offershowview'); ?>">
   <i class="fas fa-tag"></i>
   <p style="color:black;">
    İndirim Tanımla 
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
  <li class="nav-item">
    <a href="<?php echo base_url('offers/offersgchowview'); ?>" class="nav-link <?php active('offershowview'); ?>">
      <i class="far fa-circle nav-icon"></i>
      <p style="color:black;">İndirim Görüntüle</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="<?php echo base_url('offers/gamecurrencyofferadd'); ?>" class="nav-link <?php active('gamecurrencyofferadd'); ?>">
      <i class="far fa-circle nav-icon"></i>
      <p style="color:black;">İndirim Ekle</p>
    </a>
  </li>
</ul>
</li>

</ul>
</li> -->


<!-- gamecurrency yönetim kısmı bitiş -->
<!-- *********************************************************************************************************** -->
<!-- kullanici yönetim kısmı başlangıç -->


<!-- <li class="nav-item" style="background-color:#3f6791; margin: 5px; border: solid;">
  <a href="#" class="nav-link <?php active('usershowview'); ?>">
   <i class="nav-icon fas fa-users"></i>
   <p>
    KULLANICILAR
    <i class="fas fa-angle-left right"></i>
  </p>
</a>
<ul class="nav nav-treeview">
  <li class="nav-item">
    <a href="<?php echo base_url('Userss/usershowview'); ?>" class="nav-link <?php active('usershowview'); ?>">
      <i class="far fa-circle nav-icon"></i>
      <p style="color:black;">Kullanıcı Görüntüle</p>
    </a>
  </li>
</ul>
</li> -->


<!-- kullanici yönetim kısmı bitiş -->
<!-- *********************************************************************************************************** -->


</nav>
</div>

</aside>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?= base_url('assets/backend/aseets/css/bootstrap.min.css') ?>">

<!-- jQuery -->
<script src="<?= base_url('assets/backend/aseets/js/jquery-3.5.1.slim.min.js') ?>"></script>

<!-- Bootstrap JS -->
<script src="<?= base_url('assets/backend/aseets/js/bootstrap.min.js') ?>"></script>
