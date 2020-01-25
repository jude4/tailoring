<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Category Id</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td width="20%">{{ $product->user_id }}</td>
            <td width="20%">{{ $product->category_id }}</td>
            <td width="20%">{{ $product->product_name }}</td>
            <td width="20%">{{ $product->price }}</td>
            <td width="20%"><img src="/tailoring/storage/app/public/images/{{$product->image}}" width="30%"></td>
            <td width="20%">{{ $product->description }}</td>
                <td>
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('products.edit', [$product->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{$products->links()}}

