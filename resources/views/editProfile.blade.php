@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<form method="post" action="{{ route('userCtrl.editprof', $edit->id)}}" enctype="multipart/form-data">
				<div class="form-group">
	                <label>Nama Lengkap</label>
	                <input type="text" name="nl" value="{{$edit->name}}" readonly class="form-control">
	            </div>	
	            <div class="form-group">
	                <label>Email</label>
	                <input type="text" name="email" value="{{$edit->email}}" readonly class="form-control">
	            </div>	
	            <div class="form-group">
	                <label>No Telepon</label>
	                <input type="text" name="nt" class="form-control" value="{{$edit->no_tlp}}" >
	            </div>	
	            <div class="form-group">
	                <label>Lokasi</label>
	                <input type="text" name="lok" class="form-control" value="{{$edit->lokasi}}" >
	            </div>
	            <div class="form-group">
	                <label>Bio Singkat</label>
	                <textarea name="bio" class="form-control" >{{$edit->bio}}</textarea>
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