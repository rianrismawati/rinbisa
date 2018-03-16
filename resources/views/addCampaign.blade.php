@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
             <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                   <div class="panel-body">
                        <a href="{{ route('userCtrl.viewEdit', Auth::id() )}}">Edit Profile</a><br>
                        <a href="{{ route('userCtrl.viewdash') }}">Campaign</a><br>
                        <a href="{{ route('userCtrl.viewdon') }}">Donasi</a><br>
                        <a href="#">Verifikasi Akun</a><br>
                   </div>
               </div>
           </div>
           <div class="col-md-8">
         	<form method="post" action="{{ route('userCtrl.prosesAdd') }}" enctype="multipart/form-data">
				<div class="form-group">
					<label>Judul Campaign</label>
					<input type="text" name="judul" class="form-control">
				</div>
				<div class="form-group">
					<label>Foto Campaign</label>
					<input type="file" name="foto" class="form-control">
				</div>
				<div class="form-group">
					<label>Target Donasi</label>
					<input type="number" name="target" class="form-control">
				</div>
				<div class="form-group">
					<label>Deadline Donasi</label>
					<input type="date" name="deadline" class="form-control">
				</div>
				<div class="form-group">
					<label>Kategori Donasi</label>
					<input type="text" name="kategori" class="form-control">
				<!-- 	<select name="kategori" class="form-control">
						<option value=""></option>
					</select> -->
				</div>
				<div class="form-group">
					<label>Lokasi Penerimaan Dana</label>
					<input type="text" name="lokasi" class="form-control">
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea name="deskripsi" value="" class="form-control"></textarea>
				</div>
				<input type="submit" name="create" value="Add Campaign">
				 {{ csrf_field() }}
			</form>
        </div>
        </div>
 </div>

@endsection