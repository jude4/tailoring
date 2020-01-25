<!-- User Name Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Sender Name:') !!}
    <p>{{ $measurement->name }}</p>
</div>

<!-- User Email Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Sender Email Adress:') !!}
    <p>{{ $measurement->email }}</p>
</div>

<!-- User Phone Number Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Sender Phone number:') !!}
    <p>{{ $measurement->phone_no }}</p>
</div>

<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $measurement->product_name }}</p>
</div>

<!-- Fabric Field -->
<div class="form-group">
    {!! Form::label('fabric', 'Fabric:') !!}
    <p>{{ $measurement->fabric }}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $measurement->quantity }}</p>
</div>

<!-- Length Field -->
<div class="form-group">
    {!! Form::label('length', 'Length:') !!}
    <p>{{ $measurement->length }}</p>
</div>

<!-- Bust Size Field -->
<div class="form-group">
    {!! Form::label('bust_size', 'Bust Size:') !!}
    <p>{{ $measurement->bust_size }}</p>
</div>

<!-- Shoulder Size Field -->
<div class="form-group">
    {!! Form::label('shoulder_size', 'Shoulder Size:') !!}
    <p>{{ $measurement->shoulder_size }}</p>
</div>

<!-- Sleeve Length Field -->
<div class="form-group">
    {!! Form::label('sleeve_length', 'Sleeve Length:') !!}
    <p>{{ $measurement->sleeve_length }}</p>
</div>

<!-- Round Curve Field -->
<div class="form-group">
    {!! Form::label('round_curve', 'Round Curve:') !!}
    <p>{{ $measurement->round_curve }}</p>
</div>

<!-- Waist Size Field -->
<div class="form-group">
    {!! Form::label('waist_size', 'Waist Size:') !!}
    <p>{{ $measurement->waist_size }}</p>
</div>

<!-- Hip Size Field -->
<div class="form-group">
    {!! Form::label('Hip_size', 'Hip Size:') !!}
    <p>{{ $measurement->Hip_size }}</p>
</div>

<!-- Knee Length Field -->
<div class="form-group">
    {!! Form::label('knee_length', 'Knee Length:') !!}
    <p>{{ $measurement->knee_length }}</p>
</div>

<!-- Thigh Field -->
<div class="form-group">
    {!! Form::label('thigh', 'Thigh:') !!}
    <p>{{ $measurement->thigh }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p><img src="/tailoring/storage/app/public/images/{{$measurement->image}}" alt="Jackets" style="width:20%"></p>
</div>

