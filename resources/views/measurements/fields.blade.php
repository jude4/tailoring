<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_name', 'Product Name:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Fabric Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fabric', 'Fabric:') !!}
    {!! Form::text('fabric', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Length Field -->
<div class="form-group col-sm-6">
    {!! Form::label('length', 'Length:') !!}
    {!! Form::text('length', null, ['class' => 'form-control']) !!}
</div>

<!-- Bust Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bust_size', 'Bust Size:') !!}
    {!! Form::text('bust_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Shoulder Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shoulder_size', 'Shoulder Size:') !!}
    {!! Form::text('shoulder_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Sleeve Length Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sleeve_length', 'Sleeve Length:') !!}
    {!! Form::text('sleeve_length', null, ['class' => 'form-control']) !!}
</div>

<!-- Round Curve Field -->
<div class="form-group col-sm-6">
    {!! Form::label('round_curve', 'Round Curve:') !!}
    {!! Form::text('round_curve', null, ['class' => 'form-control']) !!}
</div>

<!-- Waist Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('waist_size', 'Waist Size:') !!}
    {!! Form::text('waist_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Hip Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Hip_size', 'Hip Size:') !!}
    {!! Form::text('Hip_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Knee Length Field -->
<div class="form-group col-sm-6">
    {!! Form::label('knee_length', 'Knee Length:') !!}
    {!! Form::text('knee_length', null, ['class' => 'form-control']) !!}
</div>

<!-- Thigh Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thigh', 'Thigh:') !!}
    {!! Form::text('thigh', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('measurements.index') }}" class="btn btn-default">Cancel</a>
</div>
