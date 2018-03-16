@extends('layouts.app')

@section('content')
	
	<div class="container">
		@foreach($detCamp as $tampil)
		<div class="row">
			<div class="container">
				<div class="col-md-5">
					<img src="{{ asset('storage/rinBisa/campaign/' . $tampil->foto )}}">
				</div>
				<div class="col-md-5">
					<h2>{{ $tampil->judul }}</h2>
					<h4>{{ $tampil->target }}</h4>
					<h4>{{ $tampil->deadline }}</h4>
					<a href="{{ route('userCtrl.viewproses1', $tampil->id_camp ) }}" class="btn btn-success">Donasi Sekarang</a>
				</div>
				<div class="col-md-2">
					<h3>Donatur</h3>
		                <?php $total = 0; ?>
					        @foreach($user as $users)
					       
					        	<h4>Rp. {{ $users['nominal'] }}</h4>
					        	<h5>{{ $users['nama'] }}</h5>
					        	<p> {{ $users['tanggal'] }} <br>
					        		{{ $users['komentar'] }}
					        	</p>
 								<?php $total += $users['nominal'] ?>
					        	<br>
					        @endforeach
					        <b>Total Donasi :Rp. {{ $total }} </b>
				</div>
			</div><br><br>
			<div class="container">
				<div class="col-md-10">
					<ul class="nav nav-tabs">
			            <li class="active"><a href="#Detail" data-toggle="tab">Detail</a></li>
			            <li><a href="#Pesan" data-toggle="tab">Pesan</a></li>
		       		 </ul>
		        <div class="tab-content">
		            <div class="tab-pane active" id="Detail">
		                <p>{{ $tampil->deskC }}</p>
		            </div>
            			<div class="tab-pane" id="Pesan">
            				<h3>Pesan</h3><br>
            				 	<form>
				             		<div class="form-group">
				             			<label>Nama Lengkap</label>
				             			<input type="text" name="" class="form-control" required>
				             		</div>
				             		<div class="form-group">
				             			<label>Email</label>
				             			<input type="email" name="" class="form-control">
				             		</div>
				             		<div class="form-group">
				             			<label>Perihal</label>
				             			<input type="text" name="" class="form-control">
				             		</div>
				             		<div class="form-group">
				             			<label>Pesan</label>
				             			<textarea class="form-control"></textarea>
				             		</div>
				             		<input type="submit" name="" class="btn btn-primary">
				             	</form> 
            		
            		</div>
				</div>
		</div>
		@endforeach
	</div>
	</div>
@endsection