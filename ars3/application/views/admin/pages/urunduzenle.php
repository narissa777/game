<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>
<?php date_default_timezone_set('Europe/Istanbul'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-image: url('<?php echo base_url('upload/1.jpg') ?>');height: 100%; background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/panel'); ?>">Anasayfa</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <?php flashread(); ?>
  <!-- Firma ekle sayfa başlangıcı -->
  <form action="<?php echo base_url('Admin/urunlerduzenle'); ?>" role="form" method="POST">
    <section class="content">

      
      <div class="row" >
        <div class="card-body" style="display:flex; justify-content: center;">
          <div class="col-md-3">
            <div class="card card-primary">
              <div class="card-body">
                <label style="display:flex; justify-content: center;"></label>
                <div class="form-group">
                  <label for="inputName">Ürün Başlık Giriniz</label>
                  <input type="text" name="u_baslik" class="form-control" required value="<?php echo $urunler->u_baslik; ?>"> 
                  <input type="hidden" name = "id" value= "<?php echo $urunler->id; ?>">
                </div>
                <div class="form-group">
                  <label for="inputName">Ürün Açıklamasını Giriniz</label>
                  <textarea type="text"name="u_aciklama" class="form-control" required><?php echo $urunler->u_aciklama; ?></textarea>
                  <input type="hidden" name = "id" value= "<?php echo $urunler->id; ?>">
                </div>
              </div>
              <button type="submit" name="kaydettttt" class="btn btn-success float-right">GÜNCELLE</button>
            </div>
          </div>
          
          <!-- /.card-body -->
          
          <!-- /.card -->
        </div>
      </div>
    </section>
    
 </form>

 <br>
 <br>
 <br>
 <section class="content">
   <form action="<?php echo base_url('Admin/urunlerduzenle'); ?>" role="form" method="POST" enctype= "multipart/form-data">
   
    <div class="card card-primary">
      <div class="card-body">
       <div class="form-group">
        <label for="inputName">Ürün İçin Görsel Ekleyiniz ( 450X520 EN UYGUN RESİM FORMATIDIR ) </label>
        <input type="file" name="u_image"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="inputName">Ürün İçin Görsel Ekleyiniz ( 450X520 EN UYGUN RESİM FORMATIDIR ) </label>
        <input type="file" name="u_image1"  class="form-control">
      </div>
      <div class="form-group">
        <label for="inputName">Ürün İçin Görsel Ekleyiniz ( 450X520 EN UYGUN RESİM FORMATIDIR ) </label>
        <input type="file" name="u_image2"  class="form-control">
      </div>
      <div class="form-group">
        <label for="inputName">Ürün İçin Görsel Ekleyiniz ( 450X520 EN UYGUN RESİM FORMATIDIR ) </label>
        <input type="file" name="u_image3"  class="form-control">
      </div>
      <input type="hidden" name = "id" value= "<?php echo $urunler->id; ?>">
    </div>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-6">
       <button type="submit" name="save1"  class="btn btn-success float-center">GÜNCELLE</button>
     </div>
   </div>
 </div>


</form>
<br>
<br>
</section>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script type="text/javascript" src="<?php echo base_url('assets/back/custom2.js') ?>"> </script>
<script>
  CKEDITOR.replace( 'comment' );
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#para').mask('#.##0,00', {reverse: true});
  });
</script>
<script>
  CKEDITOR.replace( 'features' );
</script>
<script>
    CKEDITOR.replace('u_aciklama');
</script>
<?php $this->load->view('admin/include/footer'); ?>
