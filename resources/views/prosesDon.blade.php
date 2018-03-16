@extends('layouts.app')

@section('content')
	<div class="container">

		<div class="col-md-6 col-md-offset-3">
			<center>
				<h3>Masukkan Nominal</h3>
				<h4>Donasi minimal Rp.20.000 dengan kelipatan ribuan (contoh: 25.000, 50.000)</h4><br>
				<form action="{{ route('userCtrl.proses1', $ambilId->id_camp ) }}" method="post">
					<div class="input-group">
					  <span class="input-group-addon">Rp</span>
					  <input type="text" class="form-control" onkeyup="copyInput();" id="input1" placeholder="0" name="nominal">
					</div><br><br>
								<h3>Tulis Komentar</h3>
					<b>Teks saja, tanpa URL/kode html, dan emoticon.</b>

					Tulis komentar yang mendukung campaign (opsional)
					<textarea name="komentar" class="form-control"></textarea>
					<br><br><br><br><br>
					<div class="input-group">
					  <span class="input-group-addon">Donasi anda Rp. </span>
					  <input type="text" class="form-control" placeholder="Jumlah Donasi" id="isiinput">
					</div><br><br>
					<input type="submit" name="create" class="btn btn-success" value="Lanjutkan">
					{{ csrf_field() }}
				</form>
			</center>
		</div>
	</div>

	<script>
		function copyInput(){
		document.getElementById('isiinput').value = document.getElementById('input1').value;
		}
	</script>
@endsection