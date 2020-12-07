@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="/add/product">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col">
                                <input name="code" class="form-control" placeholder="Code" required>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Add product</button>
                            </div>
                        </div>
                    </form>

                        <table class="table table-striped mt-4">
                            <thead>
                            <tr>
                                <th scope="col">S.no</th>
                                <th scope="col">Name</th>
                                <th scope="col">Code</th>
                                <th scope="col">Count</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $i => $product)
                            <tr>
                                <th scope="row">{{$products->firstItem()+$i}}</th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->code}}</td>
                                <td>{{$product->count}}</td>
                                <td>@mdo</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
