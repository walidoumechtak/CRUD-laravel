@extends('products.layout')

@section('content')

<div class="container showed-pro">
    <div class="card">
        <h5 class="card-header">{{ $pro->name }}</h5>
        <div class="card-body">
          <h5 class="card-title">Name: {{ $pro->name }}</h5>
          <p class="card-text">Details: {{ $pro->detail }}</p>
          <a href="{{ route('products.index') }}" class="btn btn-primary">Go back</a>
        </div>
      </div>
</div>

@endsection