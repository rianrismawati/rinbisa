@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<form method="POST" action="{{ route('userCtrl.editprof', $ambil->id)}}">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="" value="{{$ambil->name}}" readonly class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="" value="{{$ambil->email}}" readonly class="form-control">
				</div>
				<div class="form-group">
					<label>No Telephone</label>
					<input type="number" name="nt" class="form-control">
				</div>
				<div class="form-group">
					<label>Lokasi Tempat Tinggal</label>
					<textarea name="lok" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label>Bio</label>
					<textarea name="bio" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label>Foto Profile</label>
					<input type="file" name="foto_prof" class="form-control">
				</div>
				<input type="submit" name="edit" value="edit">
 				{{ csrf_field() }}
				<input type="hidden" name="_method" value="PUT">
			</form>
		</div>
	</div>
@endsection