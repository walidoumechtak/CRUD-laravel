@extends('products.layout')

@section('title', 'Create')

@section('content')

    <div class="container form-create">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name of the product</label>
              <input name="name" type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Details of product</label>
              <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Create">
        </form>
    </div>

@endsection