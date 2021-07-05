@extends('layout.app', ["current" => "vendas"])

@section('body')

<?php

$url = "http://localhost:8001/api/vendas";
$vendas = json_decode(file_get_contents($url));

$url = "http://localhost:8001/api/vendedores";
$vendedores = json_decode(file_get_contents($url));

?>

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Vendas</h5>
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>ID da Venda</th>
                    <th>Código do Vendedor</th>
                    <th>Nome</th>
                    <th>E-Mail</th>
                    <th>Valor da Venda</th>
                    <th>Comissão</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendas as $vnds) { ?>

                <tr>
                    <td>{{$vnds->id}}</td>
                    <td>{{$vnds->vendedor_id}}</td>
                    <td>{{$vnds->nome}}</td>
                    <td>{{$vnds->email}}</td>
                    <td>{{$vnds->valor}}</td>
                    <td>{{$vnds->comissao}}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" id="edit-venda" data_id="{{$vnds->id}}">Editar</button>
                        <button class="btn btn-sm btn-danger" id="del-venda" data-id="{{$vnds->id}}">Apagar</button>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <button class="btn btn-sm btn-primary" id="myBtn-add-vendas">Nova Venda</button>
    </div>
</div>

<!-- The Modal -->
<div id="myModal-vendas" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
        <span class="close-modal-vendas">&times;</span>
        <h2>Adicionar Vendas</h2>
    </div>
    <div class="modal-body">
        <label>Vendedor: </label>
        <select class="form-control" name="vendedor" id="vendedor_id">
            <option selected="selected">Selecione um vendedor</option>
            <?php foreach($vendedores as $vdds) { ?>
                <option value="{{ $vdds->id }}">{{ $vdds->nome }}</option>
            <?php } ?>
        </select>
        <label>Valor: </label><input class="form-control" type="number" name="nome" id="valor_venda">
    </div>
    <div class="modal-footer">
        <button class="btn btn-sm btn-primary" id="myBtn-save-venda">Salvar</button>
    </div>
  </div>

</div>
@endsection