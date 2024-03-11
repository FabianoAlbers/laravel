@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de Produto</h1>
        <a href="{{route('product.create')}}" class="btn btn-primary">Adicionar +</a>
    </div>
    <hr>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Titulo</th>
              <th scope="col">Valor</th>
              <th scope="col">Codigo do Produto</th>
              <th scope="col">Descrição</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            
                @foreach ($product as $rs)
                    <tr>
                    <td class="align-middle">{{$loop->iteration}}</td>
                    <td class="align-middle">{{$rs->title}}</td>
                    <td class="align-middle">{{$rs->price}}</td>
                    <td class="align-middle">{{$rs->product_code}}</td>
                    <td class="align-middle">{{$rs->description}}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group">
                            <a href="" type="button" class="btn btn-secondary">Exibir</a>
                            <a href="" type="button" class="btn btn-warning">Editar</a>
                            <a href="" type="button" class="btn btn-danger">Excluir</a>
                        </div>
                    </td>
                    </tr>
                @endforeach

          </tbody>
    </table>
@endsection