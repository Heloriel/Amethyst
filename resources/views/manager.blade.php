@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="css/manager.css">
@endsection

@section('title' , 'Início')

@section('content')

<div class="container-fluid">

<table class="table align-middle table-hover table-sm table-responsive">
    <thead>
      <tr>
        <th scope="col">Situação</th>
        <th scope="col">Pregão</th>
        <th scope="col">UASG</th>
        <th scope="col">Portal</th>
        <th scope="col">Data / Hora</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($fetch as $fetch_result)
    <tr>
        <th scope="row">
            <span class="badge ms-2 p-2 bg-success rounded-circle" title="Homologado">
                <span class="visually-hidden">Homologado</span>
            </span>
        </th>
      <td>{{ $fetch_result->preg }}</td>
      <td>{{ $fetch_result->uasg }}</td>
      <td>{{ $fetch_result->portal}}</td>
      <td>{{ $fetch_result->date }} - {{ $fetch_result->time }}</td>
      <td id="actions">
          <button class="btn btn-success btn-sm"><ion-icon name="create-outline"></ion-icon></button>
          <button class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection
