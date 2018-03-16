@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	@foreach ($tampCamp as $tampil)
    	<div class="col-md-3">
			<div class="card" style="width: 20rem;">
			  <img class="card-img-top" src="{{ asset('storage/rinBisa/campaign/' . $tampil->foto) }}" width="200">
			  <div class="card-block">
			    <h4 class="card-title">{{ $tampil->judul }}</h4>
			    <p class="card-text">{{ $tampil->deskC }}</p>

			    <a href="{{ route('userCtrl.detC', $tampil->id_camp) }}" class="btn btn-primary">Donasi</a>
			  </div>
			</div>
				<br><br>
		</div>
		@endforeach
</div>
</div>
@endsection