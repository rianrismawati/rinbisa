@extends('layouts.app')

@section('content')

	<div class="container">
		<h3>Detail Donasi</h3>
			@foreach($idDon as $det)
				Nama campaign: {{ $det->judul }} <br>
				Nama user : {{ $det->name }} <br>
				Nominal Donasi :{{ $det->nominalD}} <br>
				Tanggal Donasi : {{ $det->tglD }} <br>
			@endforeach
			<br>
			Status
			<form method="post" action="{{ route('admCtrl.updateD', $det->id_don) }}">
				<select name="stat" class="form-control">
					<option value="paid">Paid</option>
					<option value="unpaid">Unpaid</option>
				</select><br>
					<input type="submit" name="edit" value="Update" class="btn btn-success" >
					{{ csrf_field() }}
					<input type="hidden" name="_method"  value="PUT" >
	
			</form>
			
		
		</div>

@endsection