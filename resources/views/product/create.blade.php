@extends('layouts.app')
@section('body')
    <h1 class="mb-0">Adicionar Livro</h1>
    <hr>
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Título">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Preço">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Código do Produto">
            </div>
            <div class="col">
                <textarea name="description" id="" class="form-control" rows="1"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid ">
                <button class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>
@endsection