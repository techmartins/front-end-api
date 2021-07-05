@extends('layout.app', ["current" => "home"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Vendedores</h5>
                    <p class="card=text">
                        Aqui você cadastra seus vendedores.
                    </p>
                    <a href="/vendedores" class="btn btn-primary">Cadastre seus vendedores</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Categorias</h5>
                    <p class="card=text">
                        Aqui você cadastra suas vendas.
                    </p>
                    <a href="/vendas" class="btn btn-primary">Cadastre suas vendas</a>
                </div>
            </div>            
        </div>
    </div>
</div>

@endsection