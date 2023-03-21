@extends('layouts.main')

@section('title', 'Listar clientes')
@section('content')

<section class="listar-clientes">

    <form action="" method="get">
        <label for="search">Buscar cliente</label>
        <input id="search" type="text" name="search" class="form-control">
    </form>
    @if($search)
    <h3 class="mt-2">Pesquisando por: {{$search}}</h3>
    @endif

    <table class="table table-striped">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">CEP</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col" class="text-center" colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr class="text-center">
                <th scope="row">{{$cliente->id}}</th>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->endereco}}</td>
                <td>{{$cliente->cep}}</td>
                <td>{{$cliente->cpf}}</td>
                <td>{{$cliente->telefone}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{date('d/m/Y', strtotime($cliente->datanasc))}}</td>
                <td><a href="/cliente/{{$cliente->id}}" class="btn btn-warning">Alterar</a></td>
                <td>
                    @can('admin')
                    <form action="/cliente/{{$cliente->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir o cliente?')">Excluir</button>
                    </form>
                    @endcan
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    @if(count($clientes) == 0)
    <section class="nao-encontrado">
        <h3>Cliente não cadastrado!</h3>
    </section>
    @endif
</section>

@endsection
