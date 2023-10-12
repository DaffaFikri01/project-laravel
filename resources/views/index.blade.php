@extends('app')


@section('title', 'Index')


@section('content')
    <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Stock</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td><?php echo $product->name; ?></td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->status }}</td>
                    <td>
                        <a href="#">Edit</a>|<a href="#">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
