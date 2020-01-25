{{--  {{ dd(Request::path()) }}  --}}


<!-- User Id Field -->
    {!! Form::hidden('user_id', $value = 1, ['class' => 'form-control']) !!}

    <!-- Product Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('product_name', 'Product Name:') !!}
        {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
    </div>

<!-- Category Id Field -->

@if (Request::fullUrl() == url('products/create'))
    <div class="form-group col-sm-6">
        {!! Form::label('Product Categories', 'Product Categories') !!}
        {!! Form::select('category_id', $categories, $value = $categories, ['class' => 'form-control' ]) !!}
    </div>
    @else
    <div class="form-group col-sm-6">
        {!! Form::label('Product Categories', 'Product Categories') !!}
        {!! Form::select('category_id', $categories, old($category->name), ['class' => 'form-control' ]) !!}
    </div>
@endif


<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-default">Cancel</a>
</div>
