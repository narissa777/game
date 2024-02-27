<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="row" style="display: flex;justify-content: center;">
					<?php 
					for ($i=1; $i <= $okuyucucount; $i++) 
					{ 
						$ccc = 'cihaz'.$i;
						$mmm = 'makine'.$i;
						$cihazayri = 'Cihaz '.$i;
						if ($$ccc) 
						{
							if($$ccc[0]->P == 1){$stat = "Yıkama";}else{$stat = "Köpük";}
							echo '<div class="col-md-3 card card-body" style="margin-right:30px;">
							<div id="'.$ccc.'sayacclass" class="small-box bg-success">
							<h3 id="'.$ccc.'sayacid" style="text-align:center">00:00</h3>
							</div>
							<div id="'.$ccc.'class" class="small-box bg-success">
							<div class="inner">
							<h3>'.$cihazayri.'</h3>
							<p id="'.$mmm.'">'.$stat.' Çalışıyor</p>
							</div>
							<div class="icon">
							<i class="fas fa-shower"></i>
							</div>
							</div>
							</div>';
						}else
						{
							echo '<div class="col-md-3 card card-body" style="margin-right:30px;">
							<div id="'.$ccc.'sayacclass" class="small-box bg-danger">
							<h3 id="'.$ccc.'sayacid" style="text-align:center">00:00</h3>
							</div>
							<div id="'.$ccc.'class" class="small-box bg-danger">
							<div class="inner" >
							<h3>'.$cihazayri.'</h3>
							<p id="'.$mmm.'">Çalışmıyor</p>
							</div>
							<div class="icon">
							<i class="fas fa-shower"></i>
							</div>
							</div>
							</div>';
						} 
					}
					?>
				</div>
			</div>
			<div class="col-xl-12">
				<div class="row" style="display: flex;justify-content: center;">
					<?php
					for ($i=1; $i <= $havasupurgecount; $i++) 
					{ 
						$hhh = 'hava'.$i;
						if ($$hhh) 
						{
							if($$hhh[0]->P == 3){$stat = "Süpürge";}else{$stat = "Hava";}
							echo '<div class="col-md-3 card card-body" style="margin-right:30px;">
							<div id="'.$hhh.'sayacclass" class="small-box bg-success">
							<h3 id="'.$hhh.'sayacid" style="text-align:center">00:00</h3>
							</div>
							<div id="'.$hhh.'class" class="small-box bg-success">
							<div class="inner">
							<h3>Süpürge / Hava '.$i.'</h3>
							<p id="'.$hhh.'">'.$stat.' Çalışıyor</p>
							</div>
							<div class="icon">
							<i class="fas fa-broom"></i>
							</div>
							</div>
							</div>';
						}else
						{
							echo '<div class="col-md-3 card card-body" style="margin-right:30px;">
							<div id="'.$hhh.'sayacclass" class="small-box bg-danger">
							<h3 id="'.$hhh.'sayacid" style="text-align:center">00:00</h3>
							</div>
							<div id="'.$hhh.'class" class="small-box bg-danger">
							<div class="inner" >
							<h3>Süpürge / Hava '.$i.'</h3>
							<p id="'.$hhh.'">Çalışmıyor</p>
							</div>
							<div class="icon">
							<i class="fas fa-broom"></i>
							</div>
							</div>
							</div>';
						}
					}
					?>	
				</div>
			</div>
			<div class="col-xl-12">
				<div class="row" style="display: flex;justify-content: center;">
					<?php
					for ($i=1; $i <= $supurgecount; $i++) 
					{ 
						$sss = 'supurge'.$i;
						$supurgeayri = 'Süpürge '.$i; 
						if ($$sss) 
						{
							echo '<div class="col-md-3 card card-body" style="margin-right:30px;">
							<div id="'.$sss.'sayacclass" class="small-box bg-success">
							<h3 id="'.$sss.'sayacid" style="text-align:center">00:00</h3>
							</div>
							<div id="'.$sss.'class" class="small-box bg-success">
							<div class="inner">
							<h3>'.$supurgeayri.'</h3>
							<p id="'.$sss.'">Süpürge Çalışıyor</p>
							</div>
							<div class="icon">
							<i class="fas fa-broom"></i>
							</div>
							</div>
							</div>';
						}else
						{
							echo '<div class="col-md-3 card card-body" style="margin-right:30px;">
							<div id="'.$sss.'sayacclass" class="small-box bg-danger">
							<h3 id="'.$sss.'sayacid" style="text-align:center">00:00</h3>
							</div>
							<div id="'.$sss.'class" class="small-box bg-danger">
							<div class="inner">
							<h3>'.$supurgeayri.'</h3>
							<p id="'.$sss.'">Çalışmıyor</p>
							</div>
							<div class="icon">
							<i class="fas fa-broom"></i>
							</div>
							</div>
							</div>';
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3">
			<div class="card card-light">
				<div class="card-header">
					<h3 class="card-title">Kart İşlemleri</h3>
				</div>
				<div class="card-body">
					<a class="btn btn-block bg-gradient-secondary btn-lg" href="<?php echo base_url('admin/musteriekleview'); ?>">
						<div class="inner">
							<h3 style="text-align: center;"> Müşteri Ekle </h3>
							<p style="text-align: center;"> KISAYOL TUŞU = F1</p>
						</div>
					</a>
					<a class="btn btn-block bg-gradient-secondary btn-lg" href="<?php echo base_url('admin/bakiyeyukle'); ?>">
						<div class="inner">
							<h3 style="text-align: center;"> Bakiye Yükle </h3>
							<p style="text-align: center;"> KISAYOL TUŞU = F2</p>
						</div>
					</a>
					<a class="btn btn-block bg-gradient-secondary btn-lg" href="<?php echo base_url('admin/kartiade'); ?>">
						<div class="inner">
							<h3 style="text-align: center;"> Kart İade </h3>
							<p style="text-align: center;"> KISAYOL TUŞU = F3</p>
						</div>
					</a>
					<a class="btn btn-block bg-gradient-secondary btn-lg" href="<?php echo base_url('admin/musterigoruntule'); ?>">
						<div class="inner">
							<h3 style="text-align: center;"> Müşteri Görüntüle </h3>
							<p style="text-align: center;"> KISAYOL TUŞU = F4</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card card-light">
				<div class="card-header">
					<h3 class="card-title">Barkod İşlemleri</h3>
				</div>
				<div class="card-body">
					<div class="col-md-12" style="margin-top: 2%;">
						<form method="post" id="formyikama" style="text-align: center;" action="<?php echo base_url('admin/barkodolustur'); ?>">
							<input type="hidden" name="tip" value="yikama">
							<button class="btn btn-block bg-gradient-secondary btn-lg" type="submit">
								<div class="inner">
									<h3 style="text-align: center;"> Yıkama Barkodu Oluştur </h3>
									<p style="text-align: center;"> KISAYOL TUŞU = F6</p>
								</div>
							</button>
						</form>
					</div>
					<div class="col-md-12" style="margin-top: 2%;">
						<form method="post" id="formkopuk"  action="<?php echo base_url('admin/barkodolustur'); ?>">
							<input type="hidden" name="tip" value="kopuk">
							<button class="btn btn-block bg-secondary btn-lg" type="submit">
								<div class="inner">
									<h3 style="text-align: center;"> Köpük Barkodu Oluştur </h3>
									<p style="text-align: center;"> KISAYOL TUŞU = F7</p>
								</div>
							</button>
						</form>
					</div>
					<div class="col-md-12" style="margin-top: 2%;">
						<a class="btn btn-block bg-gradient-secondary btn-lg" href="<?php echo base_url('admin/barkodsorgu'); ?>">
							<div class="inner">
								<h3 style="text-align: center;"> Barkod Sorgula </h3>
								<p style="text-align: center;"> KISAYOL TUŞU = F8</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

</div>
<script type="text/javascript" src="<?php echo base_url('js/custom4.js') ?>"> </script>
<script type="text/javascript" src="<?php echo base_url('js/custom6.js') ?>"> </script>
<?php $this->load->view('admin/include/footer'); ?>