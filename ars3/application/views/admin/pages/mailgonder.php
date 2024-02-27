<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>
<style type="text/css">
	.mertbutton {
		display:inline-block;
		border-radius: 4px;
		background-color: #076b66;
		border: none;
		color: #FFFFFF;
		text-align: center;
		font-size: 28px;
		padding: 20px;
		width: 500px;
		transition: all 0.5s;
		cursor: pointer;
		margin: 5px;
	}
	.mertbutton span {
		cursor: pointer;
		display: inline-block;
		position: relative;
		transition: 0.5s;
	}
	.mertbutton span::after {
		content: '\267B';
		position: absolute;
		opacity: 0;
		top: 0;
		right: -50px;
		transition: 0.5s;
	}
	.mertbutton:hover span {
		padding-right: 45px;
	}
	.mertbutton:hover   span:after {
		opacity: 1;
		right: 0;
	}

</style>
<!--Bakiye Ekle sayfa başlangıcı -->
<section class="content">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<a class="mertbutton" href="<?php echo base_url('rapor/mailgonderfunction'); ?>">maili gönder</a>
		</div>
		<br>
		<br>
		<br>
		<br>
		<div class="col-md-6">
			<a class="mertbutton" href="<?php echo base_url('rapor/vardiyabazlimailfunction'); ?>"> Vardiya Bazlı maili gönder</a>
		</div>
	</section>
	<!-- /.content -->
	<script type="text/javascript" src="<?php echo base_url('js/custom3.js') ?>"> </script>
	<?php $this->load->view('admin/include/footer'); ?>