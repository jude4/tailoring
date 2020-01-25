<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->paginate(4);

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        // $categories = Category::all();
        // $select = [];

        // foreach($categories as $category) {
        //     $select[$category->id] = $category->name;
        // }

        $categories = Category::pluck('name', 'id')->prepend('Choose a category ', '');


        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $this->validate($request, [
            'product_name' => 'required|unique:products|max:255',
            'price' => 'required',
            'description' => 'nullable'
        ]);

        if ($request->hasFile('image')) {
            // Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            //upload image
            $path = $request->file('image')->StoreAs('public/images', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }

        $product = new Product;
        $product->user_id = Auth::user()->id;
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $filenameToStore;

        $product->save();

        // $input = $request->all();

        // $product = $this->productRepository->create($input);

        Flash::success('Product saved successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $category = Category::find($id);
        $categories = Category::pluck('name', 'id')->prepend('Choose a category ', '');
        return view('products.edit', compact('categories'))->with(['product'=> $product, 'category'=> $category]);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        // $product = $this->productRepository->update($request->all(), $id);

        $this->validate($request, [
            'product_name' => 'required|unique:products|max:255',
            'price' => 'required',
            'description' => 'nullable'
        ]);

        if ($request->hasFile('image')) {
            // Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            //upload image
            $path = $request->file('image')->StoreAs('public/images', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }

        $product = new Product;
        $product->user_id = Auth::user()->id;
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $filenameToStore;

        $product->save();
$this->validate($request, [
            'product_name' => 'required',
            'price' => 'required',
            'description' => 'nullable'
        ]);

        if ($request->hasFile('image')) {
            // Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            //upload image
            $path = $request->file('image')->StoreAs('public/images', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }

        $product = Product::find($id);
        $product->user_id = Auth::user()->id;
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $filenameToStore;

        $product->save();


        Flash::success('Product updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }
}
