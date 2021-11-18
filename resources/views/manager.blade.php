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
            <span class="badge ms-2 p-2 rounded-circle" title="{{ $status[$fetch_result->status][0] }}" style="background-color: {{ $status[$fetch_result->status][1] }};">
                <span class="visually-hidden">{{ $status[$fetch_result->status][0] }}</span>
            </span>
        </th>
      <td>{{ $fetch_result->preg }}</td>
      <td>{{ $fetch_result->uasg }}</td>
      <td>{{ $portal[$fetch_result->portal - 1]->name }}</td>
      <td>{{ date('d/m/Y', strtotime($fetch_result->date)) }} - {{ date('H:i', strtotime($fetch_result->time)) }}</td>
      <td id="actions">
          <a href="#" class="link-primary"><ion-icon name="create-outline"></ion-icon></a>
          <a href="#" class="link-danger"><ion-icon name="trash-outline"></ion-icon></a>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection
