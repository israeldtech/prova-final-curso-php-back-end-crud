@extends('layouts.main')

@section('title', 'Alterar OS')
@section('content')

<section class="alterar-os">

    <h1>Cadastrar OS</h1>
    <form class="row g-3" action="/os/atualizar/{{$os->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="cliente" class="form-label">Proprietário</label>
            <select name="idcliente" class="form-control">
            <option value="{{$proprietario->id}}">{{$proprietario->nome}}</option>
                @foreach($clientes as $cliente)
                <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" value="{{$os->marca}}">
        </div>
        <div class="col-md-6">
            <label for="endereco" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" value="{{$os->modelo}}">
        </div>
        <div class="col-12">
            <label for="defeito" class="form-label">Defeito Encontrado</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="defeito" style="height: 100px" name="defeito">{{$os->defeito}}</textarea>
                <label for="defeito">Informe o defeito</label>
            </div>
        </div>
        <div class="col-12">
            <label for="solucao" class="form-label">Soluçao</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="defeito" style="height: 100px" name="solucao">{{$os->solucao}}</textarea>
                <label for="defeito">Resumo</label>
            </div>
        </div>
        <div class="col-md-2">
            <label for="preco" class="form-label">Preço</label>
            <input type="text" class="form-control" id="preco" name="preco" value="{{$os->preco}}">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </form>

</section>

@endsection
