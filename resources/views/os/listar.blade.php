@extends('layouts.main')

@section('title', 'Listar OS')
@section('content')

<section class="listar-os">
    <section class="listar-os">
        <form action="" method="get">
            <label for="search">Numero da OS: </label>
            <input id="search" type="text" name="search" class="form-control">
        </form>

        @if($search)
        <h3 class="mt-2">Pesquisando por OS: {{$search}}</h3>
        @endif
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Defeito</th>
                    <th scope="col">Solução</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Data</th>
                    <th scope="col" class="text-center" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($os as $o)
                <tr class="text-center">
                    <th scope="row">{{$o->id}}</th>
                    <th scope="row">{{$o->nome}}</th>
                    <td>{{$o->marca}}</td>
                    <td>{{$o->modelo}}</td>
                    <td>{{$o->defeito}}</td>
                    <td>{{$o->solucao}}</td>
                    <td>{{$o->preco}}</td>
                    <td>{{date('d/m/Y', strtotime($o->created_at))}}</td>
                    <td><a href="/os/{{$o->id}}" class="btn btn-warning">Alterar</a></td>
                    <td><a href="#" class="btn btn-danger">Finalizar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @if(count($os) == 0)
        <section class="nao-encontrado">
            <h3>OS não cadastrada!</h3>
        </section>
        @endif
    </section>

    @endsection
