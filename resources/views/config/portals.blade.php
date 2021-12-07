@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="/css/configPortals.css">
@endsection

@section('title', 'Situações')

@section('content')
<form action="/config/portal/save" method="post">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="accordion" id="accordionPortal">
                @foreach ($portal as $portals)
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-{{$portals->id}}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#portalCollapse-{{$portals->id}}" aria-expanded="true" aria-controls="collapse-{{$portals->id}}">
                            {{ $portals->name }}
                        </button>
                      </h2>
                      <div id="portalCollapse-{{$portals->id}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$portals->id}}" data-bs-parent="#accordionPortal">
                        <div class="accordion-body">
                            <label for="name-{{$portals->id}}">Nome</label>
                            <input type="text" name="name" id="name-{{$portals->id}}" value="{{ $portals->name }}" aria-label="Nome" placeholder="NOME" class="form-control mb-2">
                            <label for="url-{{$portals->id}}">URL Base</label>
                            <input type="text" name="base_url" id="url-{{$portals->id}}" value="{{ $portals->base_url }}" aria-label="Url" placeholder="URL" class="form-control mb-2">
                            <label for="durl-{{$portals->id}}">URL Direta</label>
                            <input type="text" name="direct_url" id="durl-{{$portals->id}}" value="{{ $portals->direct_url }}" aria-label="Url" placeholder="URL" class="form-control mb-2">
                            <div class="d-block text-end">
                                <a href="{{$portals->base_url}}" target="_blank" class="btn btn-outline-primary rounded-circle p-0 mx-1" type="button" style="padding: 5px !important;"><i data-feather="globe"></i></a>
                                <a href="/config/portal/delete/{{$portals->id}}" class="btn btn-outline-danger rounded-circle p-0 mx-1" onclick="return confirm('Deseja realmente deletar o registro o portal {{$portals->name}} ?')" type="button" style="padding: 5px !important;"><i data-feather="x"></i></a>
                            </div>
                        </div>
                      </div>
                    </div>
                {{-- <div class="input-group mb-2 d-flex align-items-center" id="portalContainer">
                        <input type="text" name="name" id="name-{{$portals->id}}" value="{{ $portals->name }}" aria-label="Nome" placeholder="NOME" class="form-control">
                        <input type="text" name="base_url" id="url-{{$portals->id}}" value="{{ $portals->base_url }}" aria-label="Url" placeholder="URL" class="form-control">
                        <input type="text" name="direct_url" id="url-{{$portals->id}}" value="{{ $portals->direct_url }}" aria-label="Url" placeholder="URL" class="form-control">
                        <a href="/config/portal/delete/{{$portals->id}}" class="btn btn-danger p-0" type="button" style="padding: 5px !important;"><i data-feather="x"></i></a>
                    </div> --}}
                @endforeach
                </div>
            </div>

            <div class="col-12 mb-3 d-flex justify-content-center">
                <a href="/config/portal/create" class="btn btn-outline-dark rounded-circle p-1" id="add-portal-btn"><i data-feather="plus"></i></a>
            </div>
            <div class="col-6 d-flex justify-content-start my-5">
                <a class="btn btn-outline-danger rounded-pill d-inline-flex justify-content-between align-items-center"
                    href="/config/portal" onClick="return confirm('Deseja realmente cancelar a edição?')">
                    CANCELAR <i data-feather="x-circle" class="ms-2"></i>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end my-5">
                <button class="btn btn-outline-success rounded-pill" id="save">
                    SALVAR <i data-feather="check-circle" class="ms-2"></i>
                </button>
            </div>
        </div>
    </div>
    <input type="hidden" name="portalJson" id="portalJson" value="{{ $portal_json }}">
</form>
@endsection

@section('afterFooter')
<script src="/js/configPortals.js"></script>
@endsection


