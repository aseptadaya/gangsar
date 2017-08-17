<?php 
	//$this->db->select('cabang');
	$barang = $this->db->get('product');
	foreach ($barang->result() as $res){
		echo "<option value='".$res->id_product."'>".$res->product_name." ".$res->product_quality." - ".$res->package_size."</option>";
	}
?>
