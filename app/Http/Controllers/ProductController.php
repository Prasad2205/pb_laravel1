<?php


namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    
  public function index()
    {
        $products = Product::all()->toArray();          
        return view('products.index',compact('products'));  
    }

  public function create()
    {
        $products = Product::all()->toArray();   
        return view('products.create',compact('products'));
    }

 	public function show($id)
    {
        return Product::find($id)->first();
        return $id;
    }

	public function store(Request $request)
    {

        $product = $this->validate($request, [
          'name' => 'required',
          'price' => 'required|numeric',
          'image'
        ]);

        if($request->hasFile('image_name')){
            $image = $request->file('image_name');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/tmp');
            $image->move($destinationPath,$name);
            //$this->save();
        }
        $product_details = $request->all();
        unset($product_details['image_name']);
        $product_details['image_name']= $name;
        //dd($product_details);
        Product::create($product_details);
        return back()->with('success', 'Product has been added');
    }

  public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',compact('product','id'));
    }

  public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products')->with('success','Product has been  deleted');
    }

  public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $this->validate(request(), [
          'name' => 'required',
          'price' => 'required|numeric'
        ]);
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->save();
        return redirect('products')->with('success','Product has been updated');
    }

}
