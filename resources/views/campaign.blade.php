@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<h3>Campaign</h3><br>
			<a href="{{ route('userCtrl.viewAdd')}}" class="btn btn-primary">Buat Campaign Baru</a><br><br>
			<table class="table">
				<tr>
					<th>Judul Campaign</th>
					<th>Target Donasi</th>
					<th>Deadline</th>
					<th>Lokasi</th>
				</tr>
			</table>
		</div>
	</div>
@endsection