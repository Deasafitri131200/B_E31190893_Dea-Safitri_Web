<?php
 class kendaraan {
	 	var $JeninKendaraan;
		var $JumlahRoda;
        var $Warna;
        var $BahanBakar;
        var $Harga;
        var $Merek;
        var $TahunPembuatan;
        
        function hargaSecond() {
            if ($this-> TahunPembuatan > 2005)
                $second = $this-> Harga * 20/100;
            else if ($this-> TahunPembuatan >= 2005)
                $second = $this-> Harga * 30/100;
            else if($this-> TahunPembuatan <= 2000)
				$second = $this-> Harga * 40/100;
                return $second;        
        }
	
        
    }
?>        
       