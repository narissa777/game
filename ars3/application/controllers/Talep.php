
<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Europe/Istanbul');
class Talep extends CI_Controller
{

    public function talepet()
    {
        if (isPost()) {
            $c_name = postvalue('name');
            $c_mail = postvalue('email');
            $c_number = postvalue('telephone');
            $c_details = postvalue('details');
            $c_country = postvalue('country');
            $t_adress = postvalue('adress');
          
            $data = [
                'name' => $c_name,
                'email' => $c_mail,
                'telephone' => $c_number,
                'details' => $c_details,
                'country' => $c_country,
                'adress' => $t_adress,
                
            ];
            talepformu::insert($data); 

            $message = "
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
                <h1>Gönderen Kişi</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Kullanıcı Adı Soyadı</th>
                            <th>Telefon Numarası</th>
                            <th>İstekler</th>
                            <th>Ülke</th>
                            <th>Adres</th>
                            <th>Mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><p>$c_name</p></td>
                            <td><p>$c_number</p></td>
                            <td><p>$c_details</p></td>
                            <td><p>$c_country</p></td>
                            <td><p>$t_adress</p></td>
                            <td><p>$c_mail</p></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <p>Müşteri Temsilcimiz Yakında Sizlere Ulaşım Sağlayacaktır. İyi Günler Dileriz.</p>
            </body>
            </html>
            ";
            $to_email = $c_mail;
            $o_email = "blabla.ata@gmail.com";
            $subject = "BİZE DANIŞIN ARS GAME";
            $re_value = send_email($o_email,$subject,$message);
            $return_value = send_email($to_email,$subject,$message);
            
            flash('success', 'check', 'Başarılı', 'Form Başarıyla Gönderilmiştir,Talep Formu İsteğiniz Emailinize iletilmiştir,Müşteri Temsilcimiz Yakında Sizlere Ulaşım Sağlayacaktır.İyi Günler Dileriz...');   
            
            redirect('admin/contact');
        }
    }



    public function talepgoruntule(){

        $data['talepform'] = talepformu::select();
        $this->load->view('admin/talepler', $data);
    }
    public function talepsil($id)
    {
        $isExist = talepformu::find($id);
        if ($isExist) {
            talepformu::delete($id);
            flash('success', 'check', 'Başarılı', 'Talep Formu Başarıyla Silindi');
            back();
        }
  
    }
}


?>

