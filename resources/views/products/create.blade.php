@extends('layouts.base')

@section('contain')
    @include('notifies.messasge')

    {{Form::open(array('url' => 'product/store', 'method' => 'post'))}}
    <div class="col-md-12">
        <div class="form-group">
            {{Form::label('name', trans('label.name'))}}
            {{Form::text('name', null, [
                'placeholder' => trans('label.name_holder'),
                'class' => 'form-control'
            ])}}
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            {{Form::label('price', trans('label.price'))}}
            {{Form::number('price', null, [
                'placeholder' => trans('label.price_holder'),
                'class' => 'form-control'
            ])}}
        </div>
    </div>

    @include("products._category_select")

    <div class="col-md-12">
        <div class="form-group">
            {{Form::submit(trans('label.submit'), ['class' => 'btn btn-primary'])}}
        </div>
    </div>
    {{Form::close()}}
@endsection
