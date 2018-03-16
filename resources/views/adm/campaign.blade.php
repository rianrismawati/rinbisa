@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
             <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                   <div class="panel-body">
                        <a href="{{ route('admCtrl.donasi') }}">Donasi</a><br>
                        <a href="{{ route('admCtrl.camp') }}">Campaign</a><br>
                        <a href="{{ route('admCtrl.user') }}">Users</a><br>
                   </div>
               </div>
           </div>
           <div class="col-md-8">
           	<h3>Campaign</h3>
           		<table class="table">
           			<tr>
           				<th>Nama User</th>
           				<th>Judul</th>
           				<th>Foto</th>
           				<th>Target</th>
           				<th>Deadline</th>
           				<th>Aksi</th>
           			</tr>
           			@foreach($allC as $read)
           			<tr>
           				<td>{{ $read->name }}</td>
           				<td>{{ $read->judul }}</td>
           				<td><img src="{{ asset('storage/rinBisa/campaign/' . $read->foto) }}" width="100"/></td> 
           				<td>{{ $read->target }}</td>
           				<td>{{ $read->deadline}}</td>
           				<td><a href="{{ route('admCtrl.detCamp', $read->id_camp)}}" class="btn btn-success">Detail Campaign</td>
           			</tr>
           			@endforeach
           		</table>
           </div>
       </div>
   </div>

 @endsection