@extends('layout.app')

@section('content')
	<form method="POST" action="">
		<div class="form-group">
			<label>Judul Campaign</label>
			<input type="text" name="title">
		</div>
		<div class="form-group">
			<label>Judul Campaign</label>
			<input type="text" name="title">
		</div>
		<div class="form-group">
			<label>Foto Campaign</label>
			<input type="file" name="title">
		</div>
		<div class="form-group">
			<label>Target Donasi</label>
			<input type="number" name="title">
		</div>
		<div class="form-group">
			<label>Deadline Donasi</label>
			<input type="date" name="title">
		</div>
		<div class="form-group">
			<label>Kategori Donasi</label>
			<select name="">
				<option value=""></option>
			</select>
		</div>
		<div class="form-group">
			<label>Lokasi Penerimaan Dana</label>
			<input type="date" name="title">
		</div>
		<div class="form-group">
			<label>Deskripsi</label>
			<textarea name="" value=""></textarea>
		</div>
		<input type="submit" name="create" value="Add Campaign">
		{{ crsf_field }}
	</form>
@endsection