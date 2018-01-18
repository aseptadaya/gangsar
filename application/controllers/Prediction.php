<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prediction extends CI_Controller {

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
            $this->load->view('prediction');	
        }
        else redirect('login');
    }
    public function calculate(){

        //deklarasi variable setting
        $maxgen = 10;
        $popsize = 10;//testing 10 harusnya 1000
        $chromsize = 5;


        $cr=$_POST['rate'];
        $crossover=round($popsize*$cr);

        $mr=1-$_POST['rate'];
        $mutasi=$popsize-$crossover;
        
        //sorting function
        function array_sort($array, $on, $order=SORT_ASC){
                $new_array = array();
                $sortable_array = array();
                if (count($array) > 0) {
                    foreach ($array as $k => $v) {
                        if (is_array($v)) {
                            foreach ($v as $k2 => $v2) {
                                if ($k2 == $on) {
                                    $sortable_array[$k] = $v2;
                                }
                            }
                        } else {
                            $sortable_array[$k] = $v;
                        }
                    }
                    switch ($order) {
                        case SORT_ASC:
                            asort($sortable_array);
                            break;
                        case SORT_DESC:
                            arsort($sortable_array);
                            break;
                    }
                    foreach ($sortable_array as $k => $v) {
                        $new_array[$k] = $array[$k];
                    }
                }
                return $new_array;
            }

        //fetch data transaksi

        $sql = "SELECT amount FROM penjualan";
        $query = $this->db->query($sql);

        //masih manual data transaksi yang diambil
        $penjualan = array();
        $resPenjualan=array();
        $x=0;
        foreach ($query->result() as $res){
            $penjualan[$x]=$res->amount;
            $x++;
        }
        //        var_dump($penjualan);

        $indexBulan=0;
        for($bulan=11;$bulan>3;$bulan--){
            $indexVariable=0;    
            for($x=0;$x<5;$x++){
                $resPenjualan[$indexBulan][$indexVariable] = $penjualan[($bulan-$x)];
                //                                echo $bulan-$x;
                $indexVariable++;
            }
            $indexBulan++;
        }
        //        var_dump($resPenjualan);

        //inisialisasi populasi
        $populasi = array();
        $populasi_crossover = array();
        $populasi_mutasi = array();

        for ($x=0;$x<$popsize;$x++){
            for($y=0;$y<$chromsize;$y++){
                $populasi[$x][$y] = (mt_rand(-100000,100000)/1000);    
            }
        }

        
        //perulangan generasi
        for($i=0;$i<$maxgen;$i++){
            //crossover
            for ($x=0;$x<$crossover;$x++){
                $randParent1=round(mt_rand(0,$popsize));
                $randParent2=round(mt_rand(0,$popsize));
                while($randParent1==$randParent2){
                    $randParent2=mt_rand(0,$popsize); }
                for($y=0;$y<$chromsize;$y++){
                    $populasi_crossover[$x][$y]=round($populasi[$randParent1][$y]+(mt_rand(0,1000)/1000)*(($populasi[$randParent2][$y])-$populasi[$randParent1][$y]),3);
                }
            }

            //mutasi

            for($x=0;$x<$mutasi;$x++){
                $randParent1=round(mt_rand(0,$popsize));
                $randGen=round(mt_rand(0,$chromsize));
                $randDegree=mt_rand(-100000,100000)/100000;
                for($y=0;$y<$chromsize;$y++){
                    if($y==$randGen){
                        $populasi_mutasi[$x][$y]=$populasi[$x][$y]+($randDegree*(100-(-100)));
                    }
                    else{
                        $populasi_mutasi[$x][$y]=$populasi[$x][$y];
                    }
                }
            }
            //                        var_dump($populasi_mutasi);


            //Perhitungan Fitness
            $TempRegresi=array();
            $populasi_total=array_merge($populasi,$populasi_crossover,$populasi_mutasi);
//            echo "populasi Total";
//            var_dump($populasi_total);
//            echo "Res Penjualan";
//            var_dump($resPenjualan);
            //hitung regresi sementara
            for($bulan=0;$bulan<8;$bulan++){
                for ($i=0;$i<count($populasi_total);$i++){
                    $TempRegresi[$i][$bulan]=round($populasi_total[$i][0]+($populasi_total[$i][1]*$resPenjualan[$bulan][1])+($populasi_total[$i][2]*$resPenjualan[$bulan][2])+($populasi_total[$i][3]*$resPenjualan[$bulan][3])+($populasi_total[$i][4]*$resPenjualan[$bulan][4]),3);
                }    
            }
//            echo "Temp Regresi";
//            var_dump($TempRegresi);
            //hitung MSE
            $TempSelisih=array();
            $TempMSE=array();

            for ($i=0;$i<count($populasi_total);$i++){
                for($bulan=0;$bulan<8;$bulan++){
                    $TempSelisih[$bulan]=pow(($resPenjualan[$bulan][0]*$TempRegresi[$i][$bulan]),2);
                }
                $TempMSE[$i]=(1/8)*sqrt(array_sum($TempSelisih));
            }
//            echo "TempMSE";
//            var_dump($TempMSE);
            //Hitung Fitness Akhir
//            echo "Fitness";
            for ($i=0;$i<count($populasi_total);$i++){
                $populasi_total[$i][5]=(1/$TempMSE[$i]);
            }
            //seleksi
//            var_dump($populasi_total);
            //sort
            
            $selectedPopulasi = array_sort($populasi_total, '5', SORT_ASC);

            for($i=0;$i<$popsize;$i++){
                $populasi[$i]=$selectedPopulasi[$i];
            }
            //end all process, save to next gen
            $kandidatSolusi=$populasi[0];
//            var_dump($kandidatSolusi);
        }
//        var_dump ($kandidatSolusi);
        //hitung regresi akhir
        echo "Regresi Prediksi : ".$kandidatSolusi[0]+($kandidatSolusi[1]*$resPenjualan[1][1])+($kandidatSolusi[2]*$resPenjualan[1][2])+($kandidatSolusi[3]*$resPenjualan[1][3])+($kandidatSolusi[0]*$resPenjualan[1][4]);
        
    }
}
