<?php
date_default_timezone_set('Europe/Istanbul');
$config=array(
	"protocol" =>"smtp",
	"smtp_host" =>"ssl://elkos.com.tr",
	"smtp_port" =>"465",
	"smtp_user" =>"akkar@elkos.com.tr",
	"smtp_pass" => "Technolobal2022",
	"starttls" =>true,
	"charset"=> "utf-8",
	"mailtype" => "html",
	"wordwrap" =>true,
	"newline" => "\r\n",
);
$from_name = "TECHNOLOBAL BİLİŞİM BİLGİLENDİRME SİSTEMİ";
$from_address = "akkar@elkos.com.tr";
$to_name = "Technolobal Bilişim";
$to_address = "akkar@akkarpetrol.com.tr";
$subject = "Petrol Otomasyonu Günlük Özet";
$description = "Petrol Otomasyonu Günlük Özet";
$mert = musteri::select(['name<>'=>'barkod']); 
$datee = date("d.m.y H:i:s");
$message="$datee
<!DOCTYPE html>
<html>
<body>
</html>
<table>
<thead>
<tr>
<th>İşlem Numarası</th>
<th>Kart Numarası</th>
<th>İsim Soyisim</th>
<th>Telefon Numarası</th>
<th>Mevcut Bakiye</th>
</tr>
</thead>
<tbody>";
 foreach ($mert as $musteri) 
{ 
	$musteriid = $musteri->id;
	$musterikartid = $musteri->kart_id;
	$musteriname = $musteri->name;
	$musteritelefon = $musteri->telefon;
	$musteribakiye = $musteri->bakiye;
	$message .= "
	<tr>
	<td>
	<p>$musteriid</p>
	</td>
	<td>
	<p>$musterikartid</p>
	</td>
	<td>
	<p>$musteriname</p>
	</td>
	<td>
	<p>$musteritelefon</p>
	</td>
	<td>
	<p>$musteribakiye ₺</p>
	</td>
	</tr>
	";
} 
	 $message.="
	</tbody>
	</table>
	</body>
	";
	$this->email->initialize($config); 
	$this->email->from($from_address,$from_name);
	$this->email->to($to_address);
	$this->email->subject($subject);
	$this->email->message($message);
	$sendd=$this->email->send();
	if($sendd)
	{
		echo "işlem başarılı";
	}else
	{
		echo "işlem başarısız";
		echo $this->email->print_debugger();
	}
//return mail($to_address, $subject, $message, $headers);



	?>
