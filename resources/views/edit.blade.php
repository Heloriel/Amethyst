@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="/css/create.css">
<link rel="stylesheet" href="/css/customInputs.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
@endsection

@section('title' , 'Adicionar')

@section('content')

<form action="/edit/save/{{ $preg->id }}" method="post" id="addnew" >
@csrf
<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-12 mb-3">
            <div class="form-floating">
                <input type="text" value="{{ $preg->uasg }}" class="form-control" id="floatingInputUASG" name="uasg" autocomplete="off" placeholder="UASG" aria-label="UASG" aria-describedby="basic-addon1" @if($preg->budget) disabled @endif>
                <label for="floatingInputUASG" style="color: #92999F;">UASG</label>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 mb-3">
            <div class="form-floating">
                <input type="text" value="{{ $preg->preg }}" class="form-control" id="floatingInputNPregao" name="preg" autocomplete="off" placeholder="PREGÃO / ORÇAMENTO" aria-label="Número do Pregão">
                <label for="floatingInputNPregao" style="color: #92999F;">PREGÃO / ORÇAMENTO</label>
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
                    <select class="form-select" name="type" id="inputGroupSelect01" @if($preg->budget) disabled @endif>
                        @if ($preg->budget)
                            <option disabled selected value>  </option>
                        @else
                            @foreach ($type as $option_type)
                                <option value="{{ $option_type->id }}" @if ( $preg->type == $option_type->id ) selected @endif>{{ $option_type->name }}</option>
                            @endforeach
                        @endif
                    </select>
                    <label for="inputGroupSelect01">Tipo da Disputa</label>
                  </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-3">
                <div class="form-floating mb-2">
                    <select class="form-select" name="portal" id="inputGroupSelect02" @if($preg->budget) disabled @endif>
                        @if ($preg->budget)
                            <option disabled selected value>  </option>
                        @else
                            @foreach ($portal as $option_portal)
                                <option value="{{ $option_portal->id }}" @if ( $preg->portal == $option_portal->id ) selected @endif>{{ $option_portal->name }}</option>
                            @endforeach
                        @endif
                    </select>
                    <label for="inputGroupSelect02">Portal</label>
                </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-2">
                <div class="form-floating">
                    <select class="form-select" name="status" id="inputGroupSelect03"  @if($preg->budget) disabled @endif>
                        @if ($preg->budget)
                            <option disabled selected value>  </option>
                        @else
                            @foreach ($status as $option_status)
                                <option value="{{ $option_status->id }}" @if ( $preg->status == $option_status->id ) selected @endif>{{ $option_status->name }}</option>
                            @endforeach
                        @endif
                    </select>
                    <label for="inputGroupSelect03">Situação</label>
                  </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="form-floating">
                <input type="date" name="publication" value="{{ $preg->publication }}" autocomplete="off" class="form-control">
                <label for="pubPicker" style="color: #92999F;">Data da Publicação</label>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="form-floating">
                <input type="date" name="date" value="{{ $preg->date  }}" autocomplete="off" class="form-control custom-datepicker">
                <label for="datepicker" style="color: #92999F;">Data da Disputa</label>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-4">
            <div class="form-floating">
                <input type="text" name="time" value="@if($preg->budget) @else {{ date('H:i', strtotime($preg->time)) }} @endif" id="timepicker" placeholder="{{ $time_now }}" autocomplete="off" class="form-control custom-datepicker" @if($preg->budget) disabled @endif>
                <label for="datepicker" style="color: #92999F;">Hora da Disputa</label>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 mb-4">
            <div class="input-group">
                <textarea class="form-control" name="obs" placeholder="OBSERVAÇÕES" rows="10" autocomplete="off">{{ $preg->obs }}</textarea>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="form-check">
                {{-- <input class="form-check-input" name="budget" type="checkbox" value="1" id="isBudget" @if($preg->budget) checked @endif disabled>
                <label class="form-check-label" for="isBudget">
                    ORÇAMENTO
                </label> --}}
                <span class="badge rounded-pill p-2 @if($preg->budget) bg-success @else bg-primary @endif">@if($preg->budget) Orçamento @else Licitação @endif</span>
                <input type="hidden" name="budget" value="{{ $preg->budget }}">
            </div>
        </div>
        <div class="col-md-12 col-sm-12 mb-4">
            <div class="" id="hashtags-container">
                <input type="text" id="hashtags" autocomplete="off" class="form-control" placeholder="TAG's" maxlength="25">
            <small><p class="my-2">Digite a TAG e pressione <kbd>TAB</kbd> ou <kbd>ENTER</kbd> para inserir.</p></small>
                <div class="tag-container mt-3">
                    @foreach ($tags as $individual_tag)
                        @if($individual_tag)
                            <p class="tag">{{ $individual_tag }}</p>
                        @endif
                    @endforeach
                </div>
            </div>
            <input type="hidden" name="tags" id="userTags" value="{{ $preg->tags }}">
        </div>
        <div class="col-12 d-flex justify-content-between align-items-center mb-5" id="actions">
            <div class="col-6">
                <a class="btn btn-outline-danger rounded-pill d-inline-flex justify-content-between align-items-center" href="/{{ $preg->budget ? 'budgets' : 'biddings' }}/list/" onClick="return confirm('Deseja realmente cancelar a edição?')">
                    CANCELAR <i data-feather="x-circle" class="ms-2"></i>
                </a>
            </div>
            <div class="col-2 text-end">
                <a class="btn btn-outline-danger rounded-pill d-inline-flex justify-content-between align-items-center" href="/delete/{{ $preg->id }}" onClick="return confirm('Deseja realmente deletar o pregão {{ $preg->preg }} ?')">
                    EXCLUIR <i data-feather="trash" class="ms-2"></i>
                </a>
            </div>
            <div class="col-2 text-end">
                @if(!empty($direct_url))
                <a href="{{$direct_url}}" class="btn btn-outline-primary rounded-pill d-inline-flex justify-content-between align-items-center">
                   ABRIR <i data-feather="external-link" class="ms-2"></i>
                </a>
                @endif
            </div>
            <div class="col-2 text-end">
                <button class="btn btn-outline-success rounded-pill d-inline-flex justify-content-between align-items-center">
                    SALVAR <i data-feather="check-circle" class="ms-2"></i>
                </button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection


@section("afterFooter")
<script src="/js/customInputs.js"></script>
<script src="/js/edit.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
@endsection
