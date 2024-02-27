<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Europe/Istanbul');
class Admin extends CI_Controller
{

	public function index($dil)
	{
		$data['language'] = language::query("SELECT * FROM language WHERE dil_id ='$dil'");
		$data['slider'] = slider::select();
		$data['baslik'] = baslik::select();
		$data['social'] = social::select();


		
		$data['nedenbiz'] = nedenbiz::select();
		$data['urunler'] = urunler::query("SELECT * FROM urunler LIMIT 12");


		$this->load->view('frontend/index', $data);
	}
	public function category($dil)
	{
		$data['language'] = language::query("SELECT * FROM language WHERE dil_id ='$dil'");

		$data['kategoriler'] = kategoriler::select();
		$data['social'] = social::select();

		$data['baslik'] = baslik::select();

		$this->load->view('frontend/category',$data);
	}
	public function products($id,$dil)
	{
		$data['language'] = language::query("SELECT * FROM language WHERE dil_id ='$dil'");

		$data['social'] = social::select();

		$data['baslik'] = baslik::select();

		$data['urunler'] = urunler::query("SELECT * FROM urunler WHERE category_id = $id");

		$this->load->view('frontend/products',$data);
	}
	public function productdetail($id,$dil)
	{
		$data['language'] = language::query("SELECT * FROM language WHERE dil_id ='$dil'");

		$data['social'] = social::select();

		$data['baslik'] = baslik::select();

		$data['urunler'] = urunler::find($id);
		$this->load->view('frontend/productdetail',$data);
	}
	public function catalog($dil)
	{
		$data['language'] = language::query("SELECT * FROM language WHERE dil_id ='$dil'");

		$data['social'] = social::select();

		$data['baslik'] = baslik::select();

		$data['katalog'] = katalog::select();

		$this->load->view('frontend/kataloglar',$data);
	}
	public function fuarlar($dil)
	{
		$data['language'] = language::query("SELECT * FROM language WHERE dil_id ='$dil'");

		$data['social'] = social::select();

		$data['baslik'] = baslik::select();

		$data['fuar'] = fuar::select();

		$this->load->view('frontend/newrecent',$data);
	}
	public function cokyakinda($dil)
	{
		$data['language'] = language::query("SELECT * FROM language WHERE dil_id ='$dil'");

		$data['social'] = social::select();

		$data['baslik'] = baslik::select();

		$data['fuar'] = fuar::select();

		$data['cokyakinda'] = cokyakinda::select();


		$this->load->view('frontend/cokyakinda',$data);
	}
	public function aboutus($dil)
	{
		$data['language'] = language::query("SELECT * FROM language WHERE dil_id ='$dil'");

		$data['social'] = social::select();

		$data['baslik'] = baslik::select();

		$data['about'] = about::select();

		$this->load->view('frontend/aboutus',$data);
	}
	public function contact($dil)
	{
		$data['language'] = language::query("SELECT * FROM language WHERE dil_id ='$dil'");

		$data['social'] = social::select();

		$data['baslik'] = baslik::select();

		$data['contact'] = contact::select();

		$this->load->view('frontend/contact',$data);
	}



	//////////////////////////////////////////ADMİN//////////////////////////////////////////////////////////

	public function login()
	{
		$this->load->view('Admin/login');
	}

	public function loginislem()
	{
		$exist = Users::find(['email' => $this->input->post('email'), 'password' => $this->input->post('password')]);
		if ($exist) {
			$this->session->set_userdata('adminlogin', true);
			$this->session->set_userdata('admininfo', $exist);
			redirect('admin/sliderekleview');
		} else {
			$hata = "Email adresi veya şifre hatalı.";
			$this->session->set_flashdata('error', $hata);
			redirect('admin/login');
		}
	}
	public function cikis()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}


	//////////////////////SLİDER//////////////////////////////////////////////

	public function sliderekleview()
	{
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('Admin/pages/sliderekle');
		} else {
			redirect('admin/login');
		}
	}

	public function slidergoruntule()
	{

		$slider['slider'] = Slider::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('Admin/pages/slidergoruntule', $slider);
		} else {

			redirect('admin/login');
		}

		
	}
	public function sliderekle()
	{
		if (isPost()) {
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);


			$data = [



				'image' => imageupload('image', 'slider/')
			];



			Slider::insert($data);


			flash('success', 'check', 'Başarılı', 'Slider Başarıyla Eklenmiştir...');
		}

		back();
	}
	public function slidersil($id)
	{
		$isExist = Slider::find($id);
		if ($isExist) {
			Slider::delete($id);
			flash('success', 'check', 'Başarılı', 'Slider Başarıyla Silindi');
			back();
		}
	}
	//////////////////////SLİDER//////////////////////////////////////////////


	////////////////////////URUNLER///////////////////////////////////////
	public function urunlergoruntule()
	{
		$urunler['urunler'] = Urunler::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/urungoruntule', $urunler);
		} else {
			redirect('admin/login');
		}

		
	}
	public function urunlerekleindex()
	{
		$data['kategoriler']=kategoriler::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/urunekle',$data);
		} else {
			redirect('admin/login');
		}
		
	}

	public function urunekle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			
			
			$data = [
				
				
				'u_aciklama' => postvalue('u_aciklama'),
				'u_baslik' => postvalue('u_baslik'),
				'category_id'=>postvalue('kategori'),
				'u_image' => imageupload('u_image','urunler/'),
				'u_image1' => imageupload('u_image1','urunler/'),
				'u_image2' => imageupload('u_image2','urunler/'),
				'u_image3' => imageupload('u_image3','urunler/')




				
			];

			
			
			urunler::insert($data);
			
			
			flash('success','check','Başarılı','Ürün Başarıyla Eklenmiştir...');
		}
		back();
	}

	public function urunlerduzenleindex($id)
	{
		
		$data['urunler']=urunler::find($id);
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/urunduzenle',$data);
		} else {
			redirect('admin/login');
		}
			
		
	}

	public function urunlerduzenle()
	{
		if (isset($_POST['kaydettttt'])) {
			
			$data = [
				'u_baslik' => postvalue('u_baslik'),
				'u_aciklama' => postvalue('u_aciklama')
			];
			$id = postvalue('id');
			urunler::update($id, $data);
			flash('success', 'check', 'Başarılı', 'Ürün Başarıyla Güncellendi...');
		
		}
			if (isset($_POST['save1'])) {
				$config['upload_path'] = 'assets/upload/';
				$config['allowed_types'] = '*';
				$this->load->library('upload', $config);
		
				$data = [
					'u_image' => imageupload('u_image', 'urunler/'),
					'u_image1' => imageupload('u_image1', 'urunler/'),
					'u_image2' => imageupload('u_image2', 'urunler/'),
					'u_image3' => imageupload('u_image3', 'urunler/')
				];
				$id = postvalue('id');
				urunler::update($id, $data);
				flash('success', 'check', 'Başarılı', 'Ürün Başarıyla Güncellendi...');
				redirect('admin/urunlergoruntule');
			}
		
			back();
		}
		
	






	////////////////////////URUNLER///////////////////////////////////////
///////////////////////NEDENBİZ/////////////////////////////////////////


public function nedenbizindex()
	{
		$data['nedenbiz'] = nedenbiz::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/nedenbiz', $data);
		} else {
			redirect('admin/login');
		}

		
	}


	public function nedenbizduzenle()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'n_baslik1' => postvalue('n_baslik1'),
				'n_aciklama1' => postvalue('n_aciklama1'),
				'n_baslik2' => postvalue('n_baslik2'),
				'n_aciklama2' => postvalue('n_aciklama2'),
				'n_baslik3' => postvalue('n_baslik3'),
				'n_aciklama3' => postvalue('n_aciklama3'),
				'n_baslik4' => postvalue('n_baslik4'),
				'n_aciklama4' => postvalue('n_aciklama4')


			];





			nedenbiz::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}




///////////////////////NEDENBİZ/////////////////////////////////////////
///////////////////////HAKKIMIZDA/////////////////////////////////////////

public function hakkimizdaindex()
	{
		$data['about'] = about::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/hakkimizda', $data);
		} else {
			redirect('admin/login');
		}

		
	}





	


	public function hakkimzidaduzenle()
	{
		if (isset($_POST['save9'])) {
			$id = 1;
			
			$data = [
				'h_baslik1' => postvalue('h_baslik1'),
				'h_aciklama1' => postvalue('h_aciklama1'),
				'h_baslik2' => postvalue('h_baslik2'),
				'h_aciklama2' => postvalue('h_aciklama2'),
				'h_baslik3' => postvalue('h_baslik3'),
				'h_aciklama3' => postvalue('h_aciklama3')
			];
			
			about::update($id, $data);
			flash('success', 'check', 'Başarılı', 'Ürün Başarıyla Güncellendi...');
		
		}
			if (isset($_POST['save10'])) {
			$id = 1;

				$config['upload_path'] = 'assets/upload/';
				$config['allowed_types'] = '*';
				$this->load->library('upload', $config);
		
				$data = [
					'h_foto1' => imageupload('h_foto1','hakkimizda/'),
					'h_foto2' => imageupload('h_foto2','hakkimizda/')


				];
				
				about::update($id, $data);
				flash('success', 'check', 'Başarılı', 'Ürün Başarıyla Güncellendi...');
				redirect('admin/hakkimizdaindex');
			}
		
			back();
		}




///////////////////////HAKKIMIZDA/////////////////////////////////////////
///////////////////////FUAR/////////////////////////////////////////

public function fuargoruntule()
	{
		$data['fuar'] = Fuar::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/fuargoruntule', $data);
		} else {
			redirect('admin/login');
		}

		
	}
	public function fuarekleindex()
	{
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/fuarekle');
		} else {
			redirect('admin/login');
		}
		
	}

	public function fuarekle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			
			
			$data = [
				
				
				'f_baslik1' => postvalue('f_baslik1'),
				'f_baslik2' => postvalue('f_baslik2'),
				'f_aciklama' => postvalue('f_aciklama'),
				'f_resim' => imageupload('f_resim','fuar/')
				




				
			];

			
			
			Fuar::insert($data);
			
			
			flash('success','check','Başarılı','Ürün Başarıyla Eklenmiştir...');
		}
		back();
	}

	public function fuarduzenleindex($id)
	{
		
		$data['fuar']=fuar::find($id);
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/fuarduzenle',$data);
		} else {
			redirect('admin/login');
		}
			
		
	}

	public function fuarduzenle()
	{
		if (isset($_POST['kaydett'])) {
			
			$data = [
				'f_baslik1' => postvalue('f_baslik1'),
				'f_baslik2' => postvalue('f_baslik2'),
				'f_aciklama' => postvalue('f_aciklama')
			];
			$id = postvalue('id');
			fuar::update($id, $data);
			flash('success', 'check', 'Başarılı', 'Ürün Başarıyla Güncellendi...');
		
		}
			if (isset($_POST['save3'])) {
				$config['upload_path'] = 'assets/upload/';
				$config['allowed_types'] = '*';
				$this->load->library('upload', $config);
		
				$data = [
					'f_resim' => imageupload('f_resim','fuar/')

				];
				$id = postvalue('id');
				fuar::update($id, $data);
				flash('success', 'check', 'Başarılı', 'Ürün Başarıyla Güncellendi...');
				redirect('admin/fuargoruntule');
			}
		
			back();
		}
		public function fuarsil($id)
		{
			$isExist = Fuar::find($id);
			if ($isExist) {
				Fuar::delete($id);
				flash('success', 'check', 'Başarılı', 'Fuar Başarıyla Silindi');
				back();
			}
		}


///////////////////////FUAR/////////////////////////////////////////
///////////////////////CONTACT/////////////////////////////////////////

public function contactindex()
	{
		$data['contact'] = contact::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/contactduzenle', $data);
		} else {
			redirect('admin/login');
		}

		
	}

public function contactduzenle()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'adres' => postvalue('adres'),
				'mail' => postvalue('mail'),
				'telefon1' => postvalue('telefon1'),
				'telefon2' => postvalue('telefon2')
				
				

			];





			contact::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}



///////////////////////CONTACT/////////////////////////////////////////

//////////////////////MESAJ//////////////////////////////////////////////

public function mesajekle(){
	if (isPost()) {
		$c_name = postvalue('name');
		$c_mail = postvalue('email');
		$c_telephone = postvalue('c_telephone');
		$c_details = postvalue('message');

		$data = [
			'user' => $c_name,
			'email' => $c_mail,
			'telephone' => $c_telephone,
			'comment' => $c_details
		];
		mesajlar::insert($data); 

		$message="
		<!DOCTYPE html>
		<html>
		<head>
		<title>Talep Detayları</title>
		<style>
		table {
			width: 100%;
			border-collapse: collapse;
		}
		th, td {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
			font-size: 30px;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		p {
			margin: 0;
			font-style: italic;
			margin-top: 20px;
		}
		</style>
		</head>
		<body>
		</html>
		 <h1>İLETİŞİM İSTEĞİ!!!!!</h1>
		<table>
		<thead>
		<tr>
		<th>Kullanıcı Adı Soyadı</th>
		<th>Mail</th>
		<th>Konu</th>
		<th>Açıklama</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>
		<p>$c_name</p>
		</td>
		
		<td>
		<p>$c_mail</p>
		</td>
		
		<td>
		<p>$c_telephone</p>
		</td>
		
		<td>
		<p>$c_details</p>
		</td>
	   
		</tr>
		</tbody>
		</table>
		</body>
		<p>İLETİŞİM İSTEĞİ MEVCUT!!!!!!</p>
		";
		$message1="
		<!DOCTYPE html>
		<html>
		<head>
		<title>Talep Detayları</title>
		<style>
		table {
			width: 100%;
			border-collapse: collapse;
		}
		th, td {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
			font-size: 30px;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		p {
			margin: 0;
			font-style: italic;
			margin-top: 20px;
		}
		</style>
		</head>
		<body>
		</html>
		 <h1>İstek Bilgileriniz</h1>
		<table>
		<thead>
		<tr>
		<th>Kullanıcı Adı Soyadı</th>
		<th>Mail</th>
		<th>Konu</th>
		<th>Açıklama</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>
		<p>$c_name</p>
		</td>
		
		<td>
		<p>$c_mail</p>
		</td>
		
		<td>
		<p>$c_telephone</p>
		</td>
		
		<td>
		<p>$c_details</p>
		</td>
	   
		</tr>
		</tbody>
		</table>
		</body>
		<p>Müşteri Temsilcimiz Yakında Sizlere Ulaşım Sağlayacaktır. İyi Günler Dileriz.</p>
		";
		$to_email = $c_mail;
		$o_email = "blabla.ata@gmail.com";
		$subject = "İletişim İsteği";
		$return_value = send_email($to_email,$subject,$message1);
		$re_value = send_email($o_email,$subject,$message);
		
		redirect('iletisim');
	}
}
/////////////////////////MESAJ///////////////////////////////////
/////////////////////////KATALOG///////////////////////////////////
public function katalogekleindex()
	{
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/katalogekle');
		} else {
			redirect('admin/login');
		}
		
	}

	public function katalogekle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			
			
			$data = [
				
				
			
				'k_baslik' => postvalue('k_baslik'),
				'k_dosya' => imageupload('k_dosya','katalog/')

				
			];

			
			
			Katalog::insert($data);
			
			
			flash('success','check','Başarılı','Katalog Başarıyla Eklenmiştir...');
		}
		back();
	}

	public function kataloggoruntule()
	{
		$data['katalog'] = katalog::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/kataloggoruntule', $data);
		} else {
			redirect('admin/login');
		}

		
	}
	public function katalogsil($id)
	{
		$isExist = katalog::find($id);
		if ($isExist) {
			katalog::delete($id);
			flash('success', 'check', 'Başarılı', 'Fuar Başarıyla Silindi');
			back();
		}
	}

/////////////////////////KATALOG///////////////////////////////////
/////////////////////////BASLIK///////////////////////////////////


public function baslikduzenleindex()
	{
		$data['baslik'] = baslik::select();

		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/baslikduzenle',$data);
		} else {
			redirect('admin/login');
		}
		
	}
public function baslikduzenle()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'b_urunler' => postvalue('b_urunler'),
				'b_katalog' => postvalue('b_katalog'),
				'b_nedenars' => postvalue('b_nedenars'),
				'b_kategoriler' => postvalue('b_kategoriler'),
				'b_bizkimiz' => postvalue('b_bizkimiz'),
				'b_kataloglar' => postvalue('b_kataloglar'),
				'b_fuarlar' => postvalue('b_fuarlar'),
				'b_iletisim' => postvalue('b_iletisim'),
				'b_bizedanisin' => postvalue('b_bizedanisin')


				
				

			];





			baslik::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}


/////////////////////////BASLIK///////////////////////////////////
/////////////////////////SOCİAL///////////////////////////////////

public function socialduzenleindex()
	{
		$data['social'] = social::select();

		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/socialduzenle',$data);
		} else {
			redirect('admin/login');
		}
		
	}
public function socialduzenle()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				's_facebook' => postvalue('s_facebook'),
				's_mail' => postvalue('s_mail'),
				's_instagram' => postvalue('s_instagram'),
				's_whatsapp' => postvalue('s_whatsapp')
				


				
				

			];





			social::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}


/////////////////////////SOCİAL///////////////////////////////////
/////////////////////////COK YAKİNDA///////////////////////////////////
public function cokyakindagoruntule()
	{
		$data['cokyakinda'] = cokyakinda::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/cokyakindagoruntule', $data);
		} else {
			redirect('admin/login');
		}

		
	}
	public function cokyakindaekleindex()
	{
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/cokyakindaekle');
		} else {
			redirect('admin/login');
		}
		
	}

	public function cokyakindaekle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			
			
			$data = [
				
				
				'c_urunadi' => postvalue('c_urunadi'),
				'c_soon' => postvalue('c_soon'),
				'c_aciklama' => postvalue('c_aciklama'),
				'c_resim' => imageupload('c_resim','cokyakinda/')
				




				
			];

			
			
			cokyakinda::insert($data);
			
			
			flash('success','check','Başarılı','Ürün Başarıyla Eklenmiştir...');
		}
		back();
	}

	public function cokyakindaduzenleindex($id)
	{
		
		$data['cokyakinda']=cokyakinda::find($id);
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/cokyakindaduzenle',$data);
		} else {
			redirect('admin/login');
		}
			
		
	}

	public function cokyakindaduzenle()
	{
		if (isset($_POST['save8'])) {
			
			$data = [
				'c_urunadi' => postvalue('c_urunadi'),
				'c_soon' => postvalue('c_soon'),
				'c_aciklama' => postvalue('c_aciklama'),
				
				
			];
			$id = postvalue('id');
			cokyakinda::update($id, $data);
			flash('success', 'check', 'Başarılı', 'Ürün Başarıyla Güncellendi...');
		
		}
			if (isset($_POST['save7'])) {
				$config['upload_path'] = 'assets/upload/';
				$config['allowed_types'] = '*';
				$this->load->library('upload', $config);
		
				$data = [
					'c_resim' => imageupload('c_resim','cokyakinda/')

				];
				$id = postvalue('id');
				cokyakinda::update($id, $data);
				flash('success', 'check', 'Başarılı', 'Ürün Başarıyla Güncellendi...');
				redirect('admin/cokyakindagoruntule');
			}
		
			back();
		}
		public function cokyakindasil($id)
		{
			$isExist = cokyakinda::find($id);
			if ($isExist) {
				cokyakinda::delete($id);
				flash('success', 'check', 'Başarılı', 'Ürün Başarıyla Silindi');
				back();
			}
		}



/////////////////////////COK YAKİNDA///////////////////////////////////
/////////////////////////KATEGORİLER///////////////////////////////////
public function kategorilergoruntule()
	{
		$data['kategoriler'] = kategoriler::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/kategorilergoruntule', $data);
		} else {
			redirect('admin/login');
		}

		
	}
	public function kategorilerekleindex()
	{
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/kategorilerekle');
		} else {
			redirect('admin/login');
		}
		
	}

	public function kategorilerekle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			
			
			$data = [
				
				
				'k_ad' => postvalue('k_ad'),
				'k_resim' => imageupload('k_resim','kategoriler/')
				




				
			];

			
			
			Kategoriler::insert($data);
			
			
			flash('success','check','Başarılı','Ürün Başarıyla Eklenmiştir...');
		}
		back();
	}

	public function kategorilerduzenleindex($id)
	{
		
		$data['kategoriler']=kategoriler::find($id);
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/pages/kategorilerduzenle',$data);
		} else {
			redirect('admin/login');
		}
			
		
	}

	public function kategorilerduzenle()
	{
		if (isset($_POST['save11'])) {
			
			$data = [
				'k_ad' => postvalue('k_ad')
				
				

				
			];
			$id = postvalue('id');
			kategoriler::update($id, $data);
			flash('success', 'check', 'Başarılı', 'Ürün Başarıyla Güncellendi...');
		
		}
			if (isset($_POST['save12'])) {
				$config['upload_path'] = 'assets/upload/';
				$config['allowed_types'] = '*';
				$this->load->library('upload', $config);
		
				$data = [
					'k_resim' => imageupload('k_resim','kategoriler/')

				];
				$id = postvalue('id');
				kategoriler::update($id, $data);
				flash('success', 'check', 'Başarılı', 'Ürün Başarıyla Güncellendi...');
				redirect('admin/kategorilergoruntule');
			}
		
			back();
		}
		public function kategorilersil($id)
		{
			$isExist = Kategoriler::find($id);
			if ($isExist) {
				Kategoriler::delete($id);
				flash('success', 'check', 'Başarılı', 'Ürün Başarıyla Silindi');
				back();
			}
		}






/////////////////////////KATEGORİLER///////////////////////////////////


























}