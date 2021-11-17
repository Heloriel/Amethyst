@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('title' , 'Início')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Procurar no portal..." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                    <select class="form-select" id="portalSearch">
                        <option value="1" selected>Comprasnet</option>
                        <option value="2">Licitações-E</option>
                        <option value="3">Bec-SP</option>
                        <option value="4">Rede Empresas</option>
                      </select>
                  </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Disputas Hoje:</h5>
                        <p class="card-text text-center">
                            <b> {{ $pregs_today }} </b>
                        </p>
                        <p class="card-text">
                        <div class="d-grid">
                            <button class="btn btn-outline-light btn-block rounded">VER DISPUTAS</button>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Disputas Amanhã:</h5>
                        <p class="card-text text-center">
                            <b>{{ $pregs_tomorrow}}</b>
                        </p>
                        <p class="card-text">
                        <div class="d-grid">
                            <button class="btn btn-outline-light btn-block rounded">VER DISPUTAS</button>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Novas Licitações:</h5>
                        <p class="card-text text-center">
                            <b>76</b>
                        </p>
                        <p class="card-text">
                        <div class="d-grid">
                            <button class="btn btn-outline-primary btn-block rounded">VER NOVAS</button>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
