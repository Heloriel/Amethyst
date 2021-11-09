@extends('layouts.main')

@section('header')
<link rel="stylesheet" href="css/new.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">UASG</span>
                <input type="text" class="form-control" placeholder="UASG" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="input-group mb-3">
                <span class="input-group-text id="basic-addon1">NOME DO ORGÃO</span>
                <input type="text" class="form-control" placeholder="NOME DO ORGÃO" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Tipo da Disputa</option>
                      <option value="1">Pregão Eletrônico</option>
                      <option value="2">Convite</option>
                      <option value="3">Dispensa de Licitação</option>
                      <option value="4">Orçamento</option>
                    </select>
                  </div>
        </div>
        <div class="col-md-6 col-sm-12">
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Portal</option>
                      <option value="1">Comprasnet</option>
                      <option value="2">Licitações-E</option>
                      <option value="3">Bec-SP</option>
                      <option value="3">Rede Empresas</option>
                    </select>
                  </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="TBA" aria-label="Username" aria-describedby="basic-addon1" disabled>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="TBA" aria-label="Username" aria-describedby="basic-addon1" disabled>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-danger"><ion-icon name="close-outline"></ion-icon> LIMPAR</button>
            <button class="btn btn-success"><ion-icon name="checkmark-outline"></ion-icon> SALVAR</button>
        </div>
    </div>
</div>
@endsection
