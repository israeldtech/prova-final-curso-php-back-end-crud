@extends('layouts.main')

@section('title', 'Login')
@section('content')
@auth
    @can('user')
        <p>Perfil: Usuário</p>

    @elsecan('admin')
        <p>Perfil: Administrador</p>


    @endcan
@endauth

@endsection
