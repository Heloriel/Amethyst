@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="/css/create.css">
<link rel="stylesheet" href="/css/customInputs.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
@endsection

@section('title' , 'Adicionar')

@section('content')

<form action="/manager/update/{{ $preg->id }}" method="post" id="addnew" >
@csrf
<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-12 mb-3">
            <div class="form-floating">
                <input type="text" value="{{ $preg->uasg }}" class="form-control" id="floatingInputUASG" name="uasg" autocomplete="off" placeholder="UASG" aria-label="UASG" aria-describedby="basic-addon1">
                <label for="floatingInputUASG" style="color: #92999F;">UASG</label>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 mb-3">
            <div class="form-floating">
                <input type="text" value="{{ $preg->preg }}" class="form-control" id="floatingInputNPregao" name="preg" autocomplete="off" placeholder="PREGÃO" aria-label="Número do Pregão">
                <label for="floatingInputNPregao" style="color: #92999F;">PREGÃO</label>
            </div>
        </div>
        <div class="col-md-7 col-sm-12 mb-3">
            <div class="form-floating">
                <input type="text" value="{{ $preg->name }}" class="form-control" id="floatingInputNome" name="name" autocomplete="off" placeholder="NOME DO ORGÃO" aria-label="Nome do Orgão">
                <label for="floatingInputNome" style="color: #92999F;">NOME DO ORGÃO</label>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-2">
                <div class="form-floating">
                    <select class="form-select" name="type" id="inputGroupSelect01">
                      <option value="1" @if ( $preg->type == 1 ) selected @endif>Pregão Eletrônico</option>
                      <option value="2" @if ( $preg->type == 2 ) selected @endif>Convite</option>
                      <option value="3" @if ( $preg->type == 3 ) selected @endif>Dispensa de Licitação</option>
                      <option value="4" @if ( $preg->type == 4 ) selected @endif>Orçamento</option>
                    </select>
                    <label for="inputGroupSelect01">Tipo da Disputa</label>
                  </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-3">
                <div class="form-floating mb-2">
                    <select class="form-select" name="portal" id="inputGroupSelect02">
                        @foreach ($portal as $option_portal)
                            <option value="{{ $option_portal->id }}" @if ( $preg->portal == $option_portal->id ) selected @endif>{{ $option_portal->name }}</option>
                        @endforeach
                    </select>
                    <label for="inputGroupSelect02">Portal</label>
                </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-2">
                <div class="form-floating">
                    <select class="form-select" name="status" id="inputGroupSelect03">
                        @foreach ($status as $option_status)
                            <option value="{{ $option_status->id }}" @if ( $preg->status == $option_status->id ) selected @endif>{{ $option_status->name }}</option>
                        @endforeach
                    </select>
                    <label for="inputGroupSelect03">Situação</label>
                  </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="form-floating">
                <input type="text" name="publication" value="{{ date('d/m/Y', strtotime($preg->publication)) }}" id="pubPicker" placeholder="{{ $today_date }}" autocomplete="off" class="form-control">
                <label for="pubPicker" style="color: #92999F;">Data da Publicação</label>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="form-floating">
                <input type="text" name="date" value="{{ date('d/m/Y', strtotime($preg->date)) }}" id="datepicker" placeholder="{{ $today_date }}" autocomplete="off" class="form-control custom-datepicker">
                <label for="datepicker" style="color: #92999F;">Data da Disputa</label>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="form-floating">
                <input type="text" name="time" value="{{ date('H:i', strtotime($preg->time)) }}" id="timepicker" placeholder="{{ $time_now }}" autocomplete="off" class="form-control custom-datepicker">
                <label for="datepicker" style="color: #92999F;">Hora da Disputa</label>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 mb-4">
            <div class="input-group">
                <textarea class="form-control" name="obs" placeholder="OBSERVAÇÕES" rows="10" autocomplete="off">{{ $preg->obs }}</textarea>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 mb-4">
            <div class="" id="hashtags-container">
                <input type="text" id="hashtags" autocomplete="off" class="form-control" placeholder="TEMPORARY DISABLED" maxlength="25" disabled>
                <p class="my-2">Digite a TAG e pressione <kbd>TAB</kbd> ou <kbd>ENTER</kbd> para inserir.</p>
                <div class="tag-container mt-3"></div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-between mb-5" id="actions">
            <div class="col-8">
                <a class="btn btn-outline-danger rounded-pill" href="/manager" onClick="return confirm('Deseja realmente cancelar a edição?')">
                    <ion-icon name="close-circle-outline"></ion-icon> CANCELAR
                </a>
            </div>
            <div class="col-2 text-end">
                <a class="btn btn-outline-danger rounded-pill" href="/manager/delete/{{ $preg->id }}" onClick="return confirm('Deseja realmente deletar o pregão {{ $preg->preg }} ?')">
                    <ion-icon name="trash-outline"></ion-icon> EXCLUIR
                </a>
            </div>
            <div class="col-2 text-end">
                <button class="btn btn-outline-success rounded-pill">
                    <ion-icon name="checkmark-outline"></ion-icon> SALVAR
                </button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection


@section("afterFooter")
<script src="/js/customInputs.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
@endsection
