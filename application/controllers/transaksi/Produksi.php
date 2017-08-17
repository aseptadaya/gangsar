<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produksi extends CI_Controller {

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function index()
    {
        if($this->ion_auth->logged_in()){
            $this->load->view('transaksi/produksi');	
        }
        else redirect('login');
    }
    public function insertProduksi(){
        $res = $this->gangsar_model->insertData('produksi',$_POST);
        if($res >= 1){
            redirect ('transaksi/produksi');}
        else redirect('main');
    }
//    public function updateProduksi($id_produksi){
//        $res = $this->gangsar_model->insertData('produksi',$_POST);
//        if($res >= 1){
//            redirect ('transaksi/produksi');}
//        else redirect('main');
//    }
    
}
