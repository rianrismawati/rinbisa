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
                        <th>Id Donasi</th>
                        <th>Nama Campaign</th>
                        <th>Nominal Donasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($readD as $read)
                    <tr>
                        <td>{{ $read->id_don }}</td>
                        <td>{{ $read->judul }}</td>
                        <td>{{ $read->nominalD }}</td>
                        <td>{{ $read->status }}</td>
                        <td colspan="2"><a href="{{ route('admCtrl.viewDet', $read->id_don )}}" class="btn btn-success">Detail</a> | <a href="{{ route('admCtrl.destroy', $read->id_don) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
           </div>
       </div>
   </div>

@endsection