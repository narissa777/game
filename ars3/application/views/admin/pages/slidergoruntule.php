<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>
<?php $dil = $this->uri->segment(3); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="height: 100%; background-position: center;
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
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="box box-solid">
					<div class="box-body">
						<table id="banka" class="table table-bordered table-striped" style="width:100%">
							<thead>
								<tr>
									<th>Slider Resim Yol</th>
									<th>Slider Başlık</th>
									

								</tr>
							</thead>
							<tbody>
								<?php foreach ($slider as $slider) { ?>
									<tr>
										<td>
											<p><?php echo $slider->image; ?></p>
										</td>
										<td>
											<p><?php echo $slider->comment; ?></p>
										</td>
										
										<td>
											
											<button type="button" class="btn btn-danger" title="ürün sil" data-toggle="modal" data-target="#modal-danger-<?php echo $slider->id; ?>"><i class="fas fa-trash"></i></button>
											<div class="modal fade" id="modal-danger-<?php echo $slider->id; ?>">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title"><?php echo $slider->comment; ?> </h4>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<p>Silmek istediğinizden emin misiniz?&hellip;</p>
														</div>
														<div class="modal-footer justify-content-between">
															<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Hayır</button>
															<a href="<?php echo base_url('Admin/slidersil/'.$slider->id.''); ?>" class="button"><button type="button" class="btn btn-outline-danger">Evet</button></a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('admin/include/footer'); ?>