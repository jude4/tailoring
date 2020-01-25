<div class="table-responsive">
    <table class="table" id="measurements-table">
        <thead>
            <tr>
                <th>Sender Name</th>
        <th>Product Name</th>
        <th>Fabric</th>
        <th>Quantity</th>
        <th>Length</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($measurements as $measurement)
            <tr>
                <td width="15%">{{ $measurement->name }}</td>
            <td width="15%">{{ $measurement->product_name }}</td>
            <td width="15%">{{ $measurement->fabric }}</td>
            <td width="15%">{{ $measurement->quantity }}</td>
            <td width="15%">{{ $measurement->length }}</td>
            <td width="15%"><img src="/tailoring/storage/app/public/images/{{$measurement->image}}" alt="Jackets" style="width:30%"></td>
                <td width="15%">
                    {!! Form::open(['route' => ['measurements.destroy', $measurement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('measurements.show', [$measurement->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
