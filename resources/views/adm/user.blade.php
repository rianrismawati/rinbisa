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
            <table class="table">
                <tr>
                  <th>Nama User</th>
                  <th>Email</th>
                  <th>No Telephone</th>
                  <th>Lokasi Tempat Tinggal</th>
                  <th>Bio</th>
                  <th>Foto Profile</th>
                </tr>
                @foreach($user as $read)
                <tr>
                  <td>{{ $read->name }}</td>
                  <td>{{ $read->email }}</td>
                  <td>{{ $read->no_tlp }}</td>
                  <td>{{ $read->lokasi }}</td>
                  <td>{{ $read->bio }}</td>
                  <td><img src="{{ asset('storage/rinBisa/' . $read->foto_prof ) }}" width="100" /></td>
                </tr>
                @endforeach
              </table>
           </div>
         </div>
       </div>

@endsection