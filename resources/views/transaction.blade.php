@extends('layouts.main')

@section('container')
<div class="continer-fluid">
    <div class="container jumbotron mb-5">
        <div class="row mt-5">
            <div class="col-6">
                <div class="text-center">
                    <img style="height: 350px; width:350px;" src="/img/assetBayar.png" alt="">
                </div>
            </div>
            <div class="col-6 d-none d-md-block px-5">
                <h3>SCAN QRIS</h3>
                <div class="pt-2">
                    <img style="height: 200px; width:200px;" src="/img/qrCode.png" alt="">
                </div>
                <h4 class="mt-4">Bukti Pembayaran</h4>
                <br>
                <form action="/upload/proses" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<b>File Gambar</b><br/>
                        <br>
						<input type="file" name="file">
					</div>
                    <br>
					<input type="submit" value="Upload" class="btn btn-success">
				</form> 
            </div>
        </div>
    </div>
</div>
@endsection