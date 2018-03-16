@extends('layouts.app')

@section('content')

	<div class="container">
		<h3>Detail Campaign</h3>
		@foreach($detC as $tampil)
			<div class="col-md-6">
				<img src="{{ asset('storage/rinBisa/campaign/' . $tampil->foto) }}" />
				
				
				
			</div>
			<div class="col-md-6">
				<h4>{{ $tampil->name }}</h4>
				<h3>{{ $tampil->judul }}</h3>
				<h5>
					Target yang dibuat : {{ $tampil->target }} <br>
					Deadline : {{ $tampil->deadline }} <br>
					Kategori : {{ $tampil->kategori }} <br>
					Lokasi penerima dana : {{ $tampil->lokasi }} <br>
				</h5>
			</div>
		@endforeach
	</div><br><br>
	<div class="container">
		{{ $tampil->deskC }}
	</div>
@endsection