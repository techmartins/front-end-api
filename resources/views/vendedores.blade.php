@extends('layout.app', ["current" => "vendedores" ])

@section('body')

<?php
$url = "http://localhost:8001/api/vendedores";
$vendedores = json_decode(file_get_contents($url));
// var_dump($vendedores);
?>

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Vendedores</h5>
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Vendedor</th>
                    <th>E-Mail</th>
                    <th>Comissão</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendedores as $vdds) { ?>
                
                <tr>
                    <td>{{$vdds->id}}</td>
                    <td>{{$vdds->nome}}</td>
                    <td>{{$vdds->email}}</td>
                    <td>{{$vdds->comissao}}</td>
                    <td>
                        <button class="btn btn-sm btn-primary edit-vendedor" data-id="{{$vdds->id}}">Editar</button>
                        <button class="btn btn-sm btn-danger del-vendedor" data-id="{{$vdds->id}}">Apagar</button>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <button class="btn btn-sm btn-primary" id="myBtn-add-vendedor">Novo Vendedor</button>
    </div>
</div>

<!-- The Modal's Create -->
<div id="myModal-vendedor" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
        <span class="close-modal-vendedor">&times;</span>
        <h2>Adicionar Vendedor</h2>
    </div>
    <div class="modal-body">
        <label>Nome: </label><input class="form-control" type="text" name="nome" id="nome_vendedor">
        <label>E-mail: </label><input class="form-control" type="text" name="email" id="email_vendedor">
    </div>
    <div class="modal-footer">
        <button class="btn btn-sm btn-primary" id="myBtn-save-vendedor">Salvar</button>
    </div>
  </div>

</div>

<!-- The Modal's Edit -->
<div id="myModal-edit-vendedor" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
        <span class="close-modal-vendedor">&times;</span>
        <h2>Editar Vendedor</h2>
    </div>
    <div class="modal-body">
        <label>Nome: </label><input class="form-control" type="text" name="nome" id="nome_vendedor">
        <label>E-mail: </label><input class="form-control" type="text" name="email" id="email_vendedor">
    </div>
    <div class="modal-footer">
        <button class="btn btn-sm btn-primary" id="myBtn-edit-vendedor">Editar</button>
    </div>
  </div>

</div> 
@endsection