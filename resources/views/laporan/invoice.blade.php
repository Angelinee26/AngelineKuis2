<?php
use App\Models\informasiPerusahaan;
use App\Models\informasiPelanggan;
use App\Models\daftarProduk;
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
        th {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
        td {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
    </style>

    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">Informasi Perusahaan</p>     
        <table style= "margin-right:auto;margin-left:auto">
            <tr>
                <th>ID</th>
                <th>Nama Perusahaan</th>
                <th>Alamat Perusahaan</th>
            </tr>

            <tr>
            <?php
               $informasi_perusahaans = informasiPerusahaan::all();
            ?>
                @foreach ($informasi_perusahaans as $informasiPerusahaan)
                    <tr>
                        <td>{{$informasiPerusahaan->id}}</td>
                        <td>{{$informasiPerusahaan->namaPerusahaan}}</td>
                        <td>{{$informasiPerusahaan->alamatPerusahaan}}</td>
                    </tr>
                @endforeach
        </table>
    </div>

    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">Informasi Pelanggan</p>     
        <table style= "margin-right:auto;margin-left:auto">
            <tr>
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>Alamat Pelanggan</th>
            </tr>

            <tr>
            <?php
               $informasi_pelanggans = informasiPelanggan::all();
            ?>
                @foreach ($informasi_pelanggans as $informasiPelanggan)
                    <tr>
                        <td>{{$informasiPelanggan->id}}</td>
                        <td>{{$informasiPelanggan->namaPelanggan}}</td>
                        <td>{{$informasiPelanggan->alamatPelanggan}}</td>
                    </tr>
                @endforeach
        </table>
    </div>

    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">Daftar Produk</p>     
        <table style= "margin-right:auto;margin-left:auto">
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Taxes</th>
                <th>Amount</th>
            </tr>

            <tr>
            <?php
               $daftar_produks = daftarProduk::all();
            ?>
                @foreach ($daftar_produks as $daftarProduk)
                    <tr>
                        <td>{{$daftarProduk->id}}</td>
                        <td>{{$daftarProduk->namaProduk}}</td>
                        <td>{{$daftarProduk->qty}}</td>
                        <td>{{$daftarProduk->unitPrice}}</td>
                        <td>{{$daftarProduk->taxes}}</td>
                        <td>{{$daftarProduk->amount}}</td>
                    </tr>
                @endforeach
        </table>
    </div>

    <center>
        <a href="{{url('profile')}}">Cetak Invoice</a>
    </center>