<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>
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
    <form action="<?php echo base_url('Admin/urunekle'); ?>" role="form" method="POST" enctype="multipart/form-data">
        <section class="content">
            <div class="row">
                <div class="card-body" style="display:flex; justify-content: center;">
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group"> 
                                    <label for="products">Kategori Seciniz</label>
                                    <select class="form-control" name="kategori">

                                      <option disabled selected value="1">Seçiniz</option>
                                      <?php foreach ($kategoriler as $kategori ){ ?>

                                        <option  value="<?php echo $kategori->id; ?>"><?php echo $kategori->k_ad; ?></option>
                                      <?php } ?>

                                  </select>
                              </div>
                              <div class="form-group">
                                <label for="inputName">Ürün Başlık Giriniz</label>
                                <input type="text" name="u_baslik" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ürün Açıklama Giriniz</label>
                                <textarea id="u_aciklama" name="u_aciklama" class="form-control" required></textarea>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- /.card-body -->

                <!-- /.card -->
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Ürün İçin Resim 1(En ve Boy oranı maximum 450X520 olarak seçilmeli ve en iyi görüntü için en ve boy eşit olan kare fotoğraflar seçilmelidir)</label>
                            <input type="file" name="u_image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Ürün İçin Resim 2(En ve Boy oranı maximum 450X520 olarak seçilmeli ve en iyi görüntü için en ve boy eşit olan kare fotoğraflar seçilmelidir)</label>
                            <input type="file" name="u_image1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Ürün için Resim 3(En ve Boy oranı maximum 450X520 olarak seçilmeli ve en iyi görüntü için en ve boy eşit olan kare fotoğraflar seçilmelidir)</label>
                            <input type="file" name="u_image2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Ürün için Resim 4(En ve Boy oranı maximum 450X520 olarak seçilmeli ve en iyi görüntü için en ve boy eşit olan kare fotoğraflar seçilmelidir)</label>
                            <input type="file" name="u_image3" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-success float-right">Devam Et</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>
</form>
</div>

<!-- /.content -->
<script src="<?php echo base_url('system/libraries/ckeditor/ckeditor.js'); ?>"></script>
<script>
    CKEDITOR.replace('u_aciklama');
</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script type="text/javascript"></script>


<script>
    CKEDITOR.replace('features');
</script>
<script type="text/javascript">
</script>
<script>
    CKEDITOR.replace('u_aciklama');
</script>

<?php $this->load->view('admin/include/footer'); ?>