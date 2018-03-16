<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container"><br><br>
	<center>
		<h3>Pelayanan Administrasi Terpadu Kelurahan</h3><br>
		<p>Pelayanan Administrasi Kelurahan (PATUH) merupakan aplikasi yang dibuat untuk membantu masyarakat Kecamatan Cimahi Selatan dalam mengurus perizinan dan pelayanan surat di seluruh kelurahan yang ada di Kecamatan Cimahi Selatan.</p>
	</center>
</div><br><br><br><br>
<div class="container">
	<div class="col-md-4" id="box">
			<center>
		      <img src="{{ asset('img/document.png') }}" alt="..." class="img-circle img-responsive img-raised" >
		      <div class="caption"><br>
		        <p>Surat Keterangan Tidak Mampu</p><br>
		        <a href="#" class="btn btn-primary" role="button">AJUKAN</a>
		      </div>
		    </center>
	</div>
	<div class="col-md-4" id="box">
			<center>
		      <img src="{{ asset('img/document.png') }}" alt="..." class="img-circle img-responsive img-raised" >
		      <div class="caption"><br>
		        <p>Surat Keterangan Tidak Mampu Anak Sekolah</p><br>
		        <a href="#" class="btn btn-primary" role="button">AJUKAN</a>
		      </div>
		    </center>
	</div>
	<div class="col-md-4" id="box">
			<center>
		      <img src="{{ asset('img/document.png') }}" alt="..." class="img-circle img-responsive img-raised" >
		      <div class="caption"><br>
		        <p>Surat Keterangan Perbedaan Data</p><br>
		        <a href="#" class="btn btn-primary" role="button">AJUKAN</a>
		      </div>
		    </center>
	</div>
</div>
<div class="container">
		<div class="col-md-4" id="box">
			<center>
		      <img src="{{ asset('img/document.png') }}" alt="..." class="img-circle img-responsive img-raised" >
		      <div class="caption"><br>
		        <p>Surat Keterangan Domisili Usaha</p><br>
		        <a href="#" class="btn btn-primary" role="button">AJUKAN</a>
		      </div>
		    </center>
		</div>
		<div class="col-md-4" id="box">
			<center>
		      <img src="{{ asset('img/document.png') }}" alt="..." class="img-circle img-responsive img-raised" >
		      <div class="caption"><br>
		        <p>Surat Keterangan Berkelakuan Baik</p><br>
		        <a href="#" class="btn btn-primary" role="button">AJUKAN</a>
		      </div>
		    </center>
		</div>
		<div class="col-md-4" id="box">
			<center>
		      <img src="{{ asset('img/document.png') }}" alt="..." class="img-circle img-responsive img-raised" >
		      <div class="caption"><br>
		        <p>Surat Izin Keramaian</p><br>
		        <a href="#" class="btn btn-primary" role="button">AJUKAN</a>
		      </div>
		    </center>
		</div>
</div>


<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
