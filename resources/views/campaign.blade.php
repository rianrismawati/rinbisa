@extends('layouts.app')

@section('content')

	<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
             <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                   <div class="panel-body">
                        <a href="{{ route('userCtrl.viewedit', Auth::id() )}}">Edit Profile</a><br>
                        <a href="{{ route('userCtrl.viewdash') }}">Campaign</a><br>
                        <a href="{{ route('userCtrl.viewdon') }}">Donasi</a><br>
                        <a href="#">Verifikasi Akun</a><br>
                   </div>
               </div>
           </div>
           <div class="col-md-8">
           <h3>Campaign</h3><br>
			<a href="{{ route('userCtrl.viewAdd') }}" enctype="multipart/form-data" class="btn btn-primary">Buat Campaign Baru</a><br><br>
			<table class="table">
				<tr>
					<th>Judul Campaign</th>
					<th>Target Donasi</th>
					<th>Deadline</th>
					<th>Lokasi</th>
					<th>Action</th>
				</tr>
				@foreach($ambilCamp as $read)
				<tr>
					<td>{{ $read->judul}}</td>
					<td>{{ $read->target}}</td>
					<td>{{ $read->deadline}}</td>
					<td>{{ $read->lokasi}}</td>
					<td><a href="" class="btn btn-info">Detail Camp</a></td>
				</tr>
				@endforeach
			</table>
        </div>
        </div>
    </div>

@endsection