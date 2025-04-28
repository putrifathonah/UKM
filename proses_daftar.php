<?php
    // Disini kita tangkap 3 variabel dikirim 
    $tangkap_npm = $_POST["var_npm"];
    $tangkap_nama = $_POST["var_nama"];
    $tangkap_ukm = $_POST["var_ukm"];

    // tampilin yang udah ditangkep pake echo atau print 
    echo $tangkap_npm;
    echo "<br/>"; // echo untuk nyetak kode 
    echo $tangkap_nama;
    echo "<br/>";
    echo $tangkap_ukm;
    echo "<br/>";
?>