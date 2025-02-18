@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Aplikasi Data Buku Perpustakaan</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{('Dashboard')}}</div>

                <div class="card-body">
                    @if($user->roles_id == 1 )
                    Anda Login sebagai Admin
                    @else
                    Anda Login Sebagai User
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
