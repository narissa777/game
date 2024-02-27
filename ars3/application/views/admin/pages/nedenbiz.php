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
    <form action="<?php echo base_url('Admin/nedenbizduzenle'); ?>" role="form" method="POST" enctype="multipart/form-data">
        <section class="content">
            <div class="row">
                <div class="card-body" style="display:flex; justify-content: center;">
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-body">
                                <label style="display:flex; justify-content: center;"></label>
                                <div class="form-group">
                                    <label for="inputName">Ürün Başlık Giriniz</label>
                                    <input type="text" name="n_baslik1" class="form-control" required value="<?php echo $nedenbiz[0]->n_baslik1; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Ürün Açıklama Giriniz</label>
                                    <textarea id="" name="n_aciklama1" class="form-control" required><?php echo $nedenbiz[0]->n_aciklama1; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="inputName">Ürün Başlık Giriniz</label>
                                    <input type="text" name="n_baslik2" class="form-control" required value="<?php echo $nedenbiz[0]->n_baslik2; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Ürün Açıklama Giriniz</label>
                                    <textarea id="" name="n_aciklama2" class="form-control" required><?php echo $nedenbiz[0]->n_aciklama2; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="inputName">Ürün Başlık Giriniz</label>
                                    <input type="text" name="n_baslik3" class="form-control" required value="<?php echo $nedenbiz[0]->n_baslik3; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Ürün Açıklama Giriniz</label>
                                    <textarea id="" name="n_aciklama3" class="form-control" required><?php echo $nedenbiz[0]->n_aciklama3; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="inputName">Ürün Başlık Giriniz</label>
                                    <input type="text" name="n_baslik4" class="form-control" required value="<?php echo $nedenbiz[0]->n_baslik4; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Ürün Açıklama Giriniz</label>
                                    <textarea id="" name="n_aciklama4" class="form-control" required><?php echo $nedenbiz[0]->n_aciklama4; ?></textarea>
                                </div>
                                <button type="submit" name="" class="btn btn-success float-right">GÜNCELLE</button>
                                <input type="hidden" name = "id" value= "<?php echo $nedenbiz->id; ?>">
                            </div>
                            
                        </div>
                    </div>

                    <!-- /.card-body -->

                    <!-- /.card -->
                </div>
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


<?php $this->load->view('admin/include/footer'); ?>