@extends('layouts.main')

@section('title', 'Cadastrar Cliente')
@section('content')

<section class="cadastrar-cliente">
    <h1>Cadastrar Cliente</h1>

    <form class="row g-3" action="/cliente" method="post">
        @csrf
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="col-md-6">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco"  placeholder="informe o endereço do cliente" name="endereco" required>
        </div>
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-12">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>
        <div class="col-md-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="col-md-4">
            <label for="date" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="date" name="datanasc" required>
        </div>
        <div class="col-md-2">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" required>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>


</section>


@endsection
