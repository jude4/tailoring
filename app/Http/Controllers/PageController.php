<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Measurement;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.index')->withCategories($categories);
    }

    public function products($id)
    {
        $products = Product::with('category')->where('category_id', $id)->get();
        $category = Category::find($id);
        $categories = Category::all();
        return view('pages.product', ['category' => $category])->withCategories($categories)->withProducts($products);
    }

    public function single($id)
    {
        $product_id = Product::find($id);
        $product = DB::table('users')
                    ->join('products', 'users.id', 'products.user_id')
                    ->where('products.id', '=', $product_id->id)
                    ->select('users.*', 'products.*')
                    ->first();

        $items = Product::orderBy('created_at', 'desc')->take(3)->get();

        $categories = Category::all();
        $category = Category::find($product->category_id);
        return view('pages.single', ['items' => $items, 'category' => $category, 'categories' => $categories])->withProduct($product);
    }

    public function categories()
    {
        $data = DB::table('categories')
        ->join('products', 'products.category_id', '=', 'categories.id')
        ->select('categories.*', 'products.*')

        ->get();

        return view('');

    }

    public function measurement(Request $request)
    {

        $this->validate($request, [
            'fabric' => 'nullable|string',
            'quantity' => 'nullable|string',
            'length' => 'nullable|string',
            'bust_size' => 'nullable|string',
            'shoulder_size' => 'nullable|string',
            'sleeve_length' => 'nullable|string',
            'round_curve' => 'nullable|string',
            'image' => 'nullable'
        ]);

        $measurement = new Measurement();
        $measurement->user_id = Auth::user()->id;
        $measurement->product_name = $request->product_name;
        $measurement->fabric = $request->fabric;
        $measurement->quantity = $request->quantity;
        $measurement->length = $request->length;
        $measurement->bust_size = $request->bust_size;
        $measurement->sleeve_length = $request->sleeve_length;
        $measurement->shoulder_size = $request->shoulder_size;
        $measurement->round_curve = $request->round_curve;

        $measurement->waist_size = $request->waist_size;
        $measurement->Hip_size = $request->Hip_size;
        $measurement->knee_length = $request->knee_length;
        $measurement->thigh = $request->thigh;
        $measurement->image = $request->image;

        $measurement->save();
        // $measurement = Measurement::create($request->all());
        // dd($measurement;
        if ($measurement) {
            Flash::success('Your measurement was send successfully. we will get back to you soon');
            return redirect()->back();
        }

        Flash::error('Something went wrong. Try again');
        return redirect()->back();



    }

    public function takeMeasurement()
    {

        $categories = Category::all();
        return view('pages.measurement', ['categories' => $categories]);
    }

    public function about()
    {
        $categories = Category::all();
        return view('pages.about')->withCategories($categories);
    }

}




