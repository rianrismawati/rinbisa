@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<center><h2>Nomor HP Anda</h2>
			<h4>Masukan nomor HP Anda untuk menerima SMS status donasi:</h4><br></center>
			<form method="post" action="{{ route('userCtrl.proses2', $idC->id_camp )}}">
				  <input type="number" name="no_tlp" class="form-control"><br>
				  <input type="radio" name="transfer" value="BCA" checked> BCA<br>
				  <input type="radio" name="transfer" value="BNI"> BNI<br>
				  <input type="radio" name="transfer" value="BNI_Syariah"> BNI_Syariah<br>
				  <input type="radio" name="transfer" value="BRI"> BRI<br>
				  <input type="radio" name="transfer" value="Mandiri"> Mandiri<br>
				  <input type="radio" name="transfer" value="Credit_Card"> Credit_Card<br><br><br>

				  <center><input type="submit" name="create" class="btn btn-success" value="LANJUTKAN"></center>
				  	{{ csrf_field() }}
	      					  <input type="hidden" name="_method" value="PUT">
			</form>
		</div>
	</div>
</div>

@endsection