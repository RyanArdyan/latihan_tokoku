<?php

// format_rupiah, format_ribuan, terbilang, tgl_indonesia
function format_rupiah($angka)
{
    // contoh: Rp 1.000
    return "Rp " . number_format($angka, 0, ',', '.');
}

function format_ribuan($angka)
{
    // contoh 1.000
    return number_format($angka, 0, ',', '.');
}

function terbilang($angka)
{
    return Terbilang::make($angka, ' rupiah');
}

function tgl_indonesia($tgl)
{
    // $tgl akan berisi date("d-m-Y")
    // contoh date("d-m-Y") akan menghasilkan "17-07-2022"
    // aku akan mengubahnya menjadi 17 agustus 2022
    $bulan = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
    $pecahkan_tgl = explode("-", $tgl);
    return $pecahkan_tgl[0] . " " . $bulan[ (int) $pecahkan_tgl[1] ] . " " . $pecahkan_tgl[2];
}