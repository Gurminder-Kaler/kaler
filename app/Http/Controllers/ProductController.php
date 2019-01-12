<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use function Sodium\compare;

class ProductController extends Controller
{
//    public function product($id){
//        $pro9duct = Product::findorFail($id);
//        $product1 =$product->products()->whereId($id)->get();
//    }

        public function productView($id)
        {
            $abc = Product::findorFail($id);

            //$product = $abc->where("is_active","=",1 )->get();
            //$wanted = $product->where("id","=",$id);
            //dd($product);
//
            return view('oneproduct')->with(array("abc"=>$abc));
        }

        public function allProducts()
        {
            return view('allproducts');
        }


    public function index()
    {
        //
        $products = Product::paginate(5);

        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.products.create');
    }

    public function store(ProductRequest $request)
    {
        //
        $input = $request->all();
        $user = Auth::user();
        Product::create($input);
        return redirect('/admin/products');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $product = Product::findorFail($id);
        return view(' admin.products.edit',compact('product'));

    }

    public function update(ProductRequest $request, $id)
    {
    $input = $request->all();
    $product = Product::findorFail($id);
    $product->update($input);

        return redirect('admin/products');

    }

    public function destroy($id)
    {
        //
            $product=Product::findorFail($id);
              $product->delete();
              return redirect('admin/products');
    }
}
