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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- 
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>


<div class="container">
<div id="boxDet">
			<center>
		      <img src="{{ asset('img/document.png') }}" alt="..." class="img-circle img-responsive img-raised" >
		      <div class="caption"><br>
		        <h4>Surat Izin Keramaian</h4><br>
		      <br>
		      <div class="alert alert-info"><h5>Silahkan isi data di bawah ini</h5></div>
		      </center>
					    <form action="{{ route('plynCtrl@prosSik') }}" method="post">
					        <div class="form-group">
					          <label for="NIK">NIK</label>
					          <input type="number" class="form-control" name="nik">
					        </div>
					        <div class="form-group">
					          <label for="no Telephone">Nama</label>
					          <input type="text" class="form-control" name="nama">
					        </div>
					        <div class="form-group">
					          <label for="tujuan">Tujuan di adakan nya keramaian</label>
					          <input type="text" class="form-control" name="tujuan">
					        </div>
					        <div class="form-group">
					          <label for="no Telephone">No Telephone</label>
					          <input type="number" class="form-control" name="no_tlp">
					        </div>
					          <input type="submit" class="btn btn-success" type="submit" name="action">
					          {{ csrf_field() }}
					    	<a href="{{ route('back') }}" class="btn btn-default"><i class="small material-icons">keyboard_arrow_left</i>	Back</a>
					    </form>
		      </div>
	</div>
</div>


<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
