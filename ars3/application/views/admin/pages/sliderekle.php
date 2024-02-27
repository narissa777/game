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
						
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<?php flashread(); ?>
	<!-- Firma ekle sayfa başlangıcı -->
	<section class="content">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form action="<?php echo base_url('Admin/sliderekle'); ?>" role="form" method="POST" enctype="multipart/form-data">
					<div class="card card-primary">
						<div class="card-body">
							
							<div class="form-group">
								<label for="inputName">Oyun Kategorisi İçin Görsel Ekleyiniz ( 800X800 EN UYGUN RESİM FORMATIDIR ) </label>
								<input type="file" name="image" class="form-control">
							</div>
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-6">
									<button type="submit" class="btn btn-success float-right">EKLE</button>
								</div>
							</div>
						</div>
					</div>

					<!-- /.card-body -->
			</div>

			<!-- /.card -->
		</div>
</div>

</form>
</section>
<!-- /.content -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#para').mask('#.##0,00', {
			reverse: true
		});
	});
</script>
<script>
	CKEDITOR.replace('features');
</script>
<?php $this->load->view('admin/include/footer'); ?>