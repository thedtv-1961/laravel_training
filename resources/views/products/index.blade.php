@extends('layouts.base')

@section('title')
    Index
@endsection

@section('contain')
    @include('notifies.messasge')
    <a class="btn btn-success" href="{{url('product/create')}}">Add new</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Avatar</th>
            <th>Name</th>
            <th>Price</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td></td>
                <td></td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <form action="" method="POST" class="form-inline">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button type="submit" class="btn btn-danger">Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
