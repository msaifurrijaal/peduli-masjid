@extends('layouts.main')

@section('container')
<div class="container">
    {{-- Jumbotron 1 --}}
    <div class="container jumbotron">
        <div class="row mt-5">
            <div class="col-6">
                <h2 style="color: #3D8361; font-weight:bold;">DUNIA HANYA SEMENTARA<br>AKHIRAT SELAMANYA</h2>
                <br>
                <p>Bersama PeduliMasjid mari membangun tempat peribadatan umat Islam menjadi lebih memadai, lebih
                    unggul, dan makmur.</p>
                <br>
                <form action="/donasi" method="GET">
                    <button style="background-color: #C5B673; font-weight: bold;" class="btn py-1" type="submit">DONASI</button>
                </form>
            </div>
            <div class="col-6 d-none d-md-block">
                <div class="text-center">
                    <img style="height: 350px; width:350px;" src="/img/peduli.png" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- Bagian Pelayanan --}}
    <div class="container pelayanan">
        <h2 class="text-center mt-5" style="color: #1C6758; font-weight:100px;">Pelayanan Kami</h2>
        <div class="row mt-5">
            <div class="row">
                <div class="col-sm-4 mb-3">
                    <div class="card" style="background-color: #D6CDA4; border-radius: 20px;">
                        <div class="card-body">
                            <img style="height: 40px; width:40px;" class="mb-2" src="/img/mosque.png" alt="">
                            <h5 class="card-title">Media Informasi</h5>
                            <p class="card-text">PeduliMasjid dapat menjadi medai informasi masjid yang membutuhkan
                                bantuan</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="card" style="background-color: #D6CDA4; border-radius: 20px;">
                        <div class="card-body">
                            <img style="height: 40px; width:40px;" class="mb-2" src="/img/donate.png" alt="">
                            <h5 class="card-title">Donasi</h5>
                            <p class="card-text">Donasi dapat berupa dana dengan metode transkasi yang bermacam macam
                                layanan pembayaran</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="card" style="background-color: #D6CDA4; border-radius: 20px;">
                        <div class="card-body">
                            <img style="height: 40px; width:40px;" class="mb-2" src="/img/photo.png" alt="">
                            <h5 class="card-title">Dokumentasi</h5>
                            <p class="card-text">Donasi yang sudah tersalurkan akan terdapat dokumentasi sebagai bukti
                                proses transaksi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h2 class="text-center mt-5" style="color: #1C6758; font-weight:100px;">Masjid Ini Membutuhkanmu</h2>
            <div class="row mt-5">
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="card" style="width: 18rem; border-radius: 20px;">
                            <img class="card-img-top" src="/img/masjid1.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the cards content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="card" style="width: 18rem; border-radius: 20px;">
                            <img class="card-img-top" src="/img/masjid2.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the cards content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="card" style="width: 18rem; border-radius: 20px;">
                            <img class="card-img-top" src="/img/masjid3.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the cards content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
{{--  Jumbotron Kedua  --}}
<div class="container-fluid" style="background-color: #D6CDA4">
    <div class="container-fluid jumbotron">
        <div class="row mt-5 py-5">
            <div class="col-6">
                <div class="text-center">
                    <img style="height: 300px; width:300px;" src="/img/masjid.png" alt="">
                </div>
            </div>
            <div class="col-6">
                <h3 style="color: #3D8361; font-weight:bold;" class="mt-5">PeduliMasjid Akan Selalu Memberikan yang<br>Terbaik untuk Donasi Anda </h1>
                <br>
                <p>Donasi anda akan selalu aman dengan PeduliMasjid<br>inilah mengapa anda harus memilih kami</p>
                <br>
                <form action="">
                    <button style="background-color: #C5B673; font-weight: bold;" class="btn py-1">DONASI</button>
                </form>
            </div>
        </div>
        
    </div>
</div>

{{--  Testimoni  --}}

<div class="container" style="margin-top: 100px;">
    <div class="container pt-5 pb-4" style="background-color: #1C6758; border-radius:15px; margin-bottom:120px;">
        <h2 class="text-center" style="color: #FFFFFF; font-weight:100px;">Testimoni Donatur</h2>
        <p class="text-center mt-4" style="color: #D6CDA4">“PeduliMasjid sangat membantu orang yang ingin menyisihkan sedikit, karena<br>
            donatur bisa memilih masjid seusai keinginan, dan<br>
            memudahkan dengan berbagai macam metode<br>
            terimakasih PeduliMasjid.”
        </p>
        <div class="text-center">
            <img src="/img/star.png" alt="">
            <img src="/img/star.png" alt="">
            <img src="/img/star.png" alt="">
            <img src="/img/star.png" alt="">
            <img src="/img/star.png" alt="">
        </div>
        <div class="text-center mt-4">
            <h4 style="color: #FFFFFF">Erwin</h4>
            <p style="color: #FFFFFF">Balige, Indonesia</p>
        </div>
        <div class="text-center">
            <img src="/img/orang2.png" alt="">
        </div>
        

    </div>
</div>
@endsection