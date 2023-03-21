@extends('layouts.main')

@section('title', 'Início')
@section('content')


<div class="card-group">
  <div class="card">
    <img src="/img/mecanica.jpg" class="card-img-top" alt="mecanica">
    <div class="card-body">
      <h5 class="card-title">Mecânica Especializada</h5>
      <p class="card-text">Atendimento de ponta com o que há de mais atual em equipamentos e treinamento de funcionários.</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img src="/img/orcamento.jpg" class="card-img-top" alt="orçamento">
    <div class="card-body">
      <h5 class="card-title">Orçamento rápido</h5>
      <p class="card-text">Orçamento rápido e preço justo! Nada gastos extras ou surpresas com serviços desnecessários.</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img src="/img/garantia.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Garantia Premium</h5>
      <p class="card-text">Garantia de peça original e execução dos serviços. O maior prazo de garantia da categoria.</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
</div>

@endsection
