<?php
    function cekMhs($nrp){
        require('DataMahasiswa.php');
        // sorting nama Mahasiswa
        $nama = array_column($mahasiswa, 'Nama');
        array_multisort($nama, SORT_ASC, $mahasiswa);
        // mengembalikan fungsi array yang bernilai kunci
        $keys = array_keys($mahasiswa);
        //menggunakan array_search untuk mencari berdasarkan nrp
        $found_key = array_search($nrp, array_column($mahasiswa,'NRP'));
        $namaMhs = "";
        // looping for
        for ($i=0; $i < count($mahasiswa) ; $i++) {
            //jika index kunci yang ditemukan = index i 
            if ($found_key == $i) {
                //jika mahasiswa aktif dalam HIMIT
                if ($mahasiswa[$keys[$i]]['isActive'] == true) {
                    $namaMhs = $mahasiswa[$keys[$i]]['Nama'].
                    " adalah mahasiswa kelas ".$mahasiswa[$keys[$i]]['kelas'].
                    " yang aktif di HIMIT";   
                }
                // jika tidak aktif
                else { 
                    $namaMhs = $mahasiswa[$keys[$i]]['Nama'].
                    " adalah mahasiswa kelas ".$mahasiswa[$keys[$i]]['kelas'].
                    " yang tidak aktif di HIMIT";   
                }
            }
        }
        return $namaMhs;
    }
    echo cekMhs(16); //memasukkan NRP mahasiswa
?>