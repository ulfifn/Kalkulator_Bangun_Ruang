
<?php if (!defined('BASEPATH')) exit ('No direction script access allowed');

class Objek extends CI_Controller
{

    public function index()
    {
        $data = [
        'status' => 'status',
        'title' => 'Judul Bangun'
    ];
 
    $this->load->view('komponen/home', $data);
    }

    public function Balok()
    {
        $data = [
        'status' => 'status',
        'title' => 'Judul Bangun'
    ];
 
    $this->load->view('komponen/balok', $data);
    }

    public function Tabung()
    {
        $data = [
        'status' => 'status',
        'title' => 'Judul Bangun'
    ];
 
    $this->load->view('komponen/tabung', $data);
    }


    public function Limas()
    {
        $data = [
        'status' => 'status',
        'title' => 'Judul Bangun'
    ];
 
    $this->load->view('komponen/limas', $data);
    }

    public function Prisma()
    {
        $data = [
        'status' => 'status',
        'title' => 'Judul Bangun'
    ];
 
    $this->load->view('komponen/prisma', $data);
    }

    public function Segitiga()
    {
        $data = [
        'status' => 'status',
        'title' => 'Judul Bangun'
    ];
 
    $this->load->view('komponen/segitiga', $data);
    }
    public function Kubus()
    {
        $data = [
        'status' => 'status',
        'title' => 'Judul Bangun'
    ];
 
    $this->load->view('komponen/kubus', $data);
    }
    public function Lingkaran()
    {
        $data = [
        'status' => 'status',
        'title' => 'Judul Bangun'
    ];
 
    $this->load->view('komponen/lingkaran', $data);
    }




    /* Fungsi Hitung */
    public function hitung_tabung()
    {

        $p = $this->input->post("phi");
        $r = $this->input->post("jari");
        $t = $this->input->post("tinggi");
        $pil = $this->input->post("pilih");

        $this->load->model('Tabung_model');
        $hasil_tabung = $this->Tabung_model->hitung_tabung($p,$r,$t,$pil);


        $data =array(
            'hasil_tabung'=>$hasil_tabung
            ,'phi'=> $p
            ,'tinggi'=> $t
            ,'jari'=> $r
            ,'pilih'=>$pil
        );
        $this->load->view('hasil/hasil_tabung', $data);


        

    }

    public function hitung_limas()
    {
        $s = $this->input->post("sisi");
        $t = $this->input->post("tinggi");
        $pil = $this->input->post("pilih");

        $pytagoras = ((0.5 * $s) * (0.5 * $s)) + ($t * $t);
        $tsisi = sqrt($pytagoras);

        $this->load->model('Limas_model');
        $hasil_limas = $this->Limas_model->hitung_limas($s,$t,$pil);


         $data =array(
            'hasil_limas'=>$hasil_limas
            ,'sisi'=> $s
            ,'tinggi'=> $t
            ,'pilih'=>$pil
        );
        $this->load->view('hasil/hasil_limas', $data);

        
    }

    public function hitung_prisma()

    {
        $s=$this->input->post("sisi");
        $t = $this->input->post("tinggi");
        $pil = $this->input->post("pilih");

        $pytagoras = ((0.5 * $s) * (0.5 * $s)) + ($s * $s);
        $tsegitiga = sqrt($pytagoras); 
        $luas_alas = 0.5 * ($s * $tsegitiga);

        $this->load->model('Prisma_model');
        $hasil_prisma = $this->Prisma_model->hitung_prisma($s,$t,$pil);


        $data =array(
            'hasil_prisma'=>$hasil_prisma
            ,'sisi'=> $s
            ,'tinggi'=> $t
            ,'pilih'=>$pil
        );
        $this->load->view('hasil/hasil_prisma', $data);

    }
   public function hitung_balok()

    {
        $p = $this->input->post("panjang");
        $l = $this->input->post("lebar");
        $t = $this->input->post("tinggi");
        $pil = $this->input->post("pilih");

       $this->load->model('Balok_model');
        $hasil_balok = $this->Balok_model->hitung_balok($p,$l,$t,$pil);

        $data =array(
            'hasil_balok'=>$hasil_balok
            ,'panjang'=> $p
            ,'lebar'=> $l
            ,'tinggi'=>$t
            ,'pilih'=>$pil
        );
        $this->load->view('hasil/hasil', $data);
    }

    public function hitung_segitiga()

    {
        $a = $this->input->post("alas");
        $t = $this->input->post("tinggi");
        $pil = $this->input->post("pilih");

       $this->load->model('Segitiga_model');
        $hasil_segitiga = $this->Segitiga_model->hitung_segitiga($a,$t,$pil);

        $data =array(
            'hasil_segitiga'=>$hasil_segitiga
            ,'alas'=> $a
            ,'tinggi'=>$t
            ,'pilih'=>$pil
        );
        $this->load->view('hasil/hasil_segitiga', $data);
    }

    public function hitung_kubus()

    {
        $r = $this->input->post("rusuk");
        $pil = $this->input->post("pilih");

       $this->load->model('Kubus_model');
        $hasil_kubus = $this->Kubus_model->hitung_kubus($r,$pil);

        $data =array(
            'hasil_kubus'=>$hasil_kubus
            ,'rusuk'=> $r
            ,'pilih'=>$pil
        );
        $this->load->view('hasil/hasil_kubus', $data);
    }

    public function hitung_lingkaran()

    {
        $r = $this->input->post("jari");
        $pil = $this->input->post("pilih");

       $this->load->model('Lingkaran_model');
        $hasil_lingkaran = $this->Lingkaran_model->hitung_lingkaran($r,$pil);

        $data =array(
            'hasil_lingkaran'=>$hasil_lingkaran
            ,'jari'=> $r
            ,'pilih'=>$pil
        );
        $this->load->view('hasil/hasil_lingkaran', $data);
    }



}



