@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="/css/create.css">
    <link rel="stylesheet" href="/css/customInputs.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
@endsection

@section('title', 'Adicionar')

@section('content')

    <form action="/create/save" method="post" id="addnew">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-2 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputUASG" name="uasg" autocomplete="off"
                            placeholder="UASG" aria-label="UASG" aria-describedby="basic-addon1" maxlength="15">
                        <label for="floatingInputUASG" style="color: #92999F;">UASG</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputPreg" name="preg" autocomplete="off"
                            placeholder="PREGÃO / ORÇAMENTO" aria-label="Número do Pregão" maxlength="30">
                        <label for="floatingInputPreg" style="color: #92999F;">PREGÃO / ORÇAMENTO</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputNome" name="name" autocomplete="off"
                            placeholder="NOME DO ORGÃO" aria-label="Nome do Orgão">
                        <label for="floatingInputNome" style="color: #92999F;">NOME DO ORGÃO</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 mb-2">
                    <div class="form-floating">
                        <select class="form-select" name="type" id="inputGroupSelect01">
                            @foreach ($type as $option_type)
                                <option value="{{ $option_type->id }}">{{ $option_type->name }}</option>
                            @endforeach
                        </select>
                        <label for="inputGroupSelect01">Tipo da Disputa</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 mb-3">
                    <div class="form-floating mb-2">
                        <select class="form-select" name="portal" id="inputGroupSelect02">
                            @foreach ($portal as $option_portal)
                                <option value="{{ $option_portal->id }}">{{ $option_portal->name }}</option>
                            @endforeach
                        </select>
                        <label for="inputGroupSelect02">Portal</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 mb-2">
                    <div class="form-floating">
                        <select class="form-select" name="status" id="inputGroupSelect03">
                            @foreach ($status as $option_status)
                                <option value="{{ $option_status->id }}">{{ $option_status->name }}</option>
                            @endforeach
                        </select>
                        <label for="inputGroupSelect03">Situação</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 mb-4">
                    <div class="form-floating">
                        <input type="date" name="publication" placeholder="{{ $today_date }}"
                            autocomplete="off" class="form-control" maxlength="10">
                        <label for="pubPicker" style="color: #92999F;" id="publicationLabel">Data Publicação</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <div class="form-floating">
                        <input type="date" name="date" placeholder="{{ $today_date }}" autocomplete="off"
                            class="form-control" maxlength="10">
                        <label for="datepicker" style="color: #92999F;" id="datePickerLabel">Data Disputa</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <div class="form-floating">
                        <input type="time" name="time" id="timepicker" placeholder="{{ $time_now }}" autocomplete="off"
                            class="form-control custom-datepicker" maxlength="5" onClick="this.select();">
                        <label for="datepicker" style="color: #92999F;">Hora da Disputa</label>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="input-group">
                        <textarea class="form-control" name="obs" placeholder="OBSERVAÇÕES" rows="8"
                            autocomplete="off"></textarea>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="form-check">
                        <input class="form-check-input" name="budget" type="checkbox" value="1" id="isBudget">
                        <label class="form-check-label" for="isBudget">
                            ORÇAMENTO
                        </label>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="" id="hashtags-container">
                        <input type="text" id="hashtags" autocomplete="off" class="form-control" placeholder="TAG's"
                            maxlength="30">
                            <small>
                        <p class="my-2">Digite a TAG e pressione <kbd>TAB</kbd> ou <kbd>ENTER</kbd> para inserir.</p>
                    </small>
                        <div class="tag-container mt-3"></div>
                    </div>
                    <input type="hidden" name="tags" id="userTags" value="">
                </div>
                <div class="col-12 d-flex justify-content-between mb-5">
                    <button class="btn btn-outline-danger rounded-pill" onClick="formReset()">
                        LIMPAR <i data-feather="x-circle"></i>
                    </button>
                    <button class="btn btn-outline-success rounded-pill">
                        SALVAR <i data-feather="check-circle"></i>
                    </button>
                </div>

            </div>
        </div>
    </form>
@endsection


@section('afterFooter')
    <script src="/js/customInputs.js"></script>
    <script src="/js/create.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
@endsection
