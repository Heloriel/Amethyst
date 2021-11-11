@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="css/addnew.css">
<link rel="stylesheet" href="css/customInputs.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
@endsection

@section('title' , 'Adicionar')

@section('content')

<form action="" method="get" id="addnew" >

<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-12 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputUASG" name="uasg" autocomplete="off" placeholder="UASG" aria-label="UASG" aria-describedby="basic-addon1">
                <label for="floatingInputUASG">UASG</label>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputNPregao" name="numero_pregao" autocomplete="off" placeholder="Nº DO PREGÃO" aria-label="Número do Pregão">
                <label for="floatingInputNPregao">N° DO PREGÃO</label>
            </div>
        </div>
        <div class="col-md-7 col-sm-12 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputNome" name="nome_do_orgao" autocomplete="off" placeholder="NOME DO ORGÃO" aria-label="Nome do Orgão">
                <label for="floatingInputNome">NOME DO ORGÃO</label>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-2">
                <div class="form-floating">
                    <select class="form-select" name="tipo" id="inputGroupSelect01">
                      <option value="1" selected>Pregão Eletrônico</option>
                      <option value="2">Convite</option>
                      <option value="3">Dispensa de Licitação</option>
                      <option value="4">Orçamento</option>
                    </select>
                    <label for="inputGroupSelect01">Tipo da Disputa</label>
                  </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-3">
                <div class="form-floating mb-2">
                    <select class="form-select" name="portal" id="inputGroupSelect02">
                      <option value="1" selected>Comprasnet</option>
                      <option value="2">Licitações-E</option>
                      <option value="3">Bec-SP</option>
                      <option value="3">Rede Empresas</option>
                    </select>
                    <label for="inputGroupSelect02">Portal</label>
                </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-2">
                <div class="form-floating">
                    <select class="form-select" name="status" id="inputGroupSelect03">
                      <option value="1" selected>Publicado</option>
                      <option value="2">Aguardando Documentação</option>
                      <option value="3">Aguardando Cadastro</option>
                      <option value="4">Aguardando Disputa</option>
                      <option value="5">Em Disputa</option>
                      <option value="6">Habilitação</option>
                      <option value="7">Homologado</option>
                      <option value="8">Desclassificado</option>
                      <option value="9">Cancelado</option>
                      <option value="10">Encerrado</option>
                    </select>
                    <label for="inputGroupSelect03">Situação</label>
                  </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-4">
            <div class="input-group">
                <input type="text" name="data_disputa" id="datepicker" placeholder="{{ $today_date }}" autocomplete="off" class="form-control custom-datepicker">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mb-4">
            <div class="input-group">
                <input type="text" name="hora_disputa" id="timepicker" placeholder="{{ $time_now }}" autocomplete="off" class="form-control custom-datepicker">
            </div>
        </div>
        <div class="col-md-12 col-sm-12 mb-4">
            <div class="input-group">
                <textarea class="form-control" name="obs" placeholder="OBSERVAÇÕES" rows="10" autocomplete="off"></textarea>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 mb-4">
            <div class="" id="hashtags-container">
                <input type="text" id="hashtags" autocomplete="off" class="form-control" placeholder="TAG's" maxlength="25">
                <div class="tag-container mt-3"></div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-outline-danger rounded-pill" onClick="formReset()"><ion-icon name="close-outline" id="clear-btn-icon"></ion-icon> LIMPAR</button>
            <button class="btn btn-outline-success rounded-pill"><ion-icon name="checkmark-outline" id="save-btn-icon"></ion-icon> SALVAR</button>
        </div>
    </div>
</div>
</form>
@endsection


@section("afterFooter")
<script src="js/customInputs.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
@endsection
