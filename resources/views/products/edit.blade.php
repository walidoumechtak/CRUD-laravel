@extends('products.layout')

@section('content')

<div class="container form-create">
    <h3 class="center">Update the product</h3>
    <form action="{{ route('products.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Name of the product</label>
          <input name="name" type="text" class="form-control" id="exampleInputEmail1" value="{{ $edit->name }}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Details of product</label>
          <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $edit->detail }}</textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
</div>

@endsection