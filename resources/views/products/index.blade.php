@extends('products.layout')



@section('title', 'index')
{{-- @extends('products.navbar') --}}
@section('content')

<div class="container landing-page">
    @if ($msg = Session::get('success'))
        <div class="alert alert-success">
            <b> {{ $msg }} </b>
        </div>   
    @endif
    @if ($msg_create = Session::get('create-success'))
      <div class="alert alert-success">
        {{ $msg_create }}
      </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">details</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="div">
                        <a class="btn btn-success" href="{{ route('products.edit', $product->id) }}">Edit</a>
                        <a class="btn btn-primary" href="{{ route('products.show', $product->id) }}">Show</a>
                        <input class="btn btn-danger" type="submit" value="Delete" name="delete">
                    </div>    
                </form>
            </td>
          </tr>
        @endforeach
          

        </tbody>
      </table>
</div>

@endsection