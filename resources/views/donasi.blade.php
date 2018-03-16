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
         	<h3>Donasi Anda</h3><br><br>
				<table class="table">
					<tr>
						<td>Nama Campaign</td>
						<td>Nominal Donasi</td>
						<td>Tanggal Donasi</td>
						<td>Transfer Via Bank</td>
						<td>Status</td>
					</tr>
					@foreach($donasiUs as $read)
					<tr>
						<td>{{ $read->judul }}</td>
						<td>{{ $read->nominalD }}</td>
						<td>{{ $read->tglD }}</td>
						<td>{{ $read->transferVia }}</td>
						<td>{{ $read->status }}</td>
					</tr>
					@endforeach
				</table>
        </div>
        </div>
 </div>
@endsection

