@extends('layouts.main')

@section('header')
<link rel="stylesheet" href="css/addnew.css">
<link rel="stylesheet" href="css/customInputs.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="UASG" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-10 col-sm-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="NOME DO ORGÃO" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nº DO PREGÃO" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
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
        <div class="col-md-4 col-sm-12">
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
                <input type="text" id="datepicker" placeholder="{{ $today_date }}" class="form-control custom-datepicker">
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="input-group mb-3">
                <input type="text" id="datepicker" placeholder="{{ $today_date }}" class="form-control custom-datepicker">
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="input-group mb-3">
                <textarea class="form-control" placeholder="OBSERVAÇÕES" rows="10"></textarea>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="input-group mb-3">
                <input type="text" id="hashtags" autocomplete="off" class="form-control">
                <div class="tag-container"></div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-danger"><ion-icon name="close-outline"></ion-icon> LIMPAR</button>
            <button class="btn btn-success"><ion-icon name="checkmark-outline"></ion-icon> SALVAR</button>
        </div>
    </div>
</div>
@endsection


@section("afterFooter")
<script src="js/customInputs.js"></script>
@endsection