<div class="col-md-12">
    <div class="form-group">
        {{Form::label('category_id', trans('label.category'))}}
        {{Form::select('category_id', $categories->pluck('name', 'id'), null, [
            'placeholder' => trans('label.category_holder'),
            'class' => 'form-control'
        ])}}
    </div>
</div>
