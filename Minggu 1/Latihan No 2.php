<?php
 class kendaraan {
	 	var $JeninKendaraan;
		var $JumlahRoda;
        var $Warna;
        var $BahanBakar;
        var $Harga;
        var $Merek;
        var $TahunPembuatan;
        
        function dapatSubsidi() {
			if (($this -> BahanBakar = 'Premium') && ($this -> TahunPembuatan < 2005)) $subsidi = 'Dapat';
            else $subsidi = 'Tidak Dapat';
            return $subsidi;
        }
        
    }
?>