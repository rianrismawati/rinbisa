@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
             <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                   <div class="panel-body">
                        <a href="{{ route('admCtrl.donasi') }}">Donasi</a><br>
                        <a href="{{ route('admCtrl.camp')}}">Campaign</a><br>
                        <a href="{{ route('admCtrl.user')}}">Users</a><br>
                   </div>
               </div>
           </div>
           <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection