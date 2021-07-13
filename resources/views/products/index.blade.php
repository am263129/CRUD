@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Fasa Learning Project From Sparkle</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('products.create')}}" class="btn btn-success">Create New Products</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>    
    @endif
    
    <table class="table table-bordered">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Details</td>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
            
        @endforeach
    </table>

    {!!$products->links() !!}
@endsection