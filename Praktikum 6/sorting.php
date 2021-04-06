<?php
    require('DataMahasiswa.php');

    // fungsi untuk mengurutkan Nama(tanpa parameter)
    function tampilUrutNama(){
        require('DataMahasiswa.php');
        //Melakukan sorting nama secara ascending
        $nama = array_column($mahasiswa, 'Nama');
        array_multisort($nama, SORT_ASC, $mahasiswa);
        $namaMhs = "";
        // looping foreach
        foreach ($mahasiswa as $mhs => $value) {
            // looping for 1 iterasi
            for ($value=0; $value < 1; $value++) { 
                $namaMhs = $namaMhs."Nama : ".$mahasiswa[$mhs]['Nama'].", NRP : ".$mahasiswa[$mhs]['NRP']."<br>";
            }
        }
        return $namaMhs;
    }

    // fungsi untuk mengurutkan NRP(dengan parameter)
    function tampilUrutNRP($mahasiswa){
        $nama = array_column($mahasiswa, 'NRP');
        array_multisort($nama, SORT_DESC, $mahasiswa);
        $nrpMhs = "";
         // looping foreach
        foreach ($mahasiswa as $mhs => $value) {
            // looping for 1 iterasi
            for ($value=0; $value < 1; $value++) { 
                $nrpMhs = $nrpMhs."Nama : ".$mahasiswa[$mhs]['Nama'].", NRP : ".$mahasiswa[$mhs]['NRP']."<br>";
            }
        }
        return $nrpMhs;
    }

    echo "<h3>i. Menampikan Nama & NRP dengan Nama sort ascending<h3>";
    echo tampilUrutNama();
    echo "<hr>";
    echo "<h3>ii. Menampikan Nama & NRP dengan NRP sort descending<h3>";
    echo tampilUrutNRP($mahasiswa);
    
?>