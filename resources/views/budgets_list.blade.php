@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="css/list.css">
@endsection

@section('title' , 'Início')

@section('content')
<div class="container-fluid">

  <div class="input-group mb-3">
    <input type="text" class="form-control rounded-pill" placeholder="Procurar..." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
  </div>

<table class="table align-middle table-hover table-sm table-responsive">
    <thead>
      <tr>
        <th scope="col">Nº do Orçamento</th>
        <th scope="col">Orgão</th>
        <th scope="col">Recebimento</th>
        <th scope="col">Envio</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($fetch as $fetch_result)
    <tr>
      <td>{{ $fetch_result->preg }}</td>
      <td>{{ $fetch_result->name }}</td>
      <td>{{ date('d/m/Y', strtotime($fetch_result->publication)) }}</td>
      <td>{{ date('d/m/Y', strtotime($fetch_result->date)) }}</td>
      <td id="actions" class="d-flex align-items-center">
        <a href="#" class="link-primary me-3"><i data-feather="eye"></i></a>
        <a href="/edit/{{ $fetch_result->id }}" class="link-dark me-3"><i data-feather="edit"></i></a>
        <a href="/delete/{{ $fetch_result->id }}" class="link-danger me-3" onClick="return confirm('Deseja realmente deletar o registro {{ $fetch_result->preg }} ?')"><i data-feather="trash"></i></a>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection

@section('afterFooter')

@endsection
