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
    <form action="<?php echo base_url('Admin/baslikduzenle'); ?>" role="form" method="POST" enctype="multipart/form-data">
        <section class="content">
            <div class="row">
                <div class="card-body" style="display:flex; justify-content: center;">
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-body">
                                <label style="display:flex; justify-content: center;"></label>
                                <div class="form-group">
                                    <label for="inputName">Ürünler Başlık</label>
                                    <input type="text" name="b_urunler" class="form-control" required value="<?php echo $baslik[0]->b_urunler; ?>">
                                </div>
                               
                                <div class="form-group">
                                    <label for="inputName">Katalog Başlık</label>
                                    <input type="text" name="b_katalog" class="form-control" required value="<?php echo $baslik[0]->b_katalog; ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputName">NedenArs Başlık </label>
                                    <input type="text" name="b_nedenars" class="form-control" required value="<?php echo $baslik[0]->b_nedenars; ?>">
                                </div>
                               

                                <div class="form-group">
                                    <label for="inputName">Kategoriler Başlık </label>
                                    <input type="text" name="b_kategoriler" class="form-control" required value="<?php echo $baslik[0]->b_kategoriler; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="inputName">Biz Kimiz Başlık </label>
                                    <input type="text" name="b_bizkimiz" class="form-control" required value="<?php echo $baslik[0]->b_bizkimiz; ?>">
                                </div>
                             
                                <div class="form-group">
                                    <label for="inputName">Kataloglar Başlık </label>
                                    <input type="text" name="b_kataloglar" class="form-control" required value="<?php echo $baslik[0]->b_kataloglar; ?>">
                                </div>
                             
                                <div class="form-group">
                                    <label for="inputName">Fuarlar Başlık </label>
                                    <input type="text" name="b_fuarlar" class="form-control" required value="<?php echo $baslik[0]->b_fuarlar; ?>">
                                </div>
                             
                                <div class="form-group">
                                    <label for="inputName">İletisim Başlık</label>
                                    <input type="text" name="b_iletisim" class="form-control" required value="<?php echo $baslik[0]->b_iletisim; ?>">
                                </div>
                             
                                <div class="form-group">
                                    <label for="inputName">Bizedanisin Başlık</label>
                                    <input type="text" name="b_bizedanisin" class="form-control" required value="<?php echo $baslik[0]->b_bizedanisin; ?>">
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