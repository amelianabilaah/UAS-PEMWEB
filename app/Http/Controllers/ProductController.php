<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(){
        $data = Product::all();
        return view('product', compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function insertdata(Request $request){

        $input = $request->all();

        $request->validate([
            'productName' => ['required'],
            'description' => ['required'],
            'productPrice' => ['required'],
            'productStock' => ['required'],
            'image' => ['required'],
            'type' => ['required'],
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->extension();
            $path = $image->storeAs('uploads', $imageName, 'public');
            $input['image'] = '/storage/'.$path;
        }

        Product::create($input);

        return redirect()->route('product')->with('success','Data Created Successfully');
        
    }

    public function updatedata($id){
        $data = Product::findOrFail($id);
        return view('update', compact('data'));
    }

    public function view_user($id){
        $data = Product::findOrFail($id);
        return view('product.viewproduct', compact('data'));
    }

    public function resubmitdata(Request $request, $id){
        $data = Product::findOrFail($id);
        $input = $request->all();

        $request->validate([
            'productName' => ['required'],
            'description' => ['required'],
            'productPrice' => ['required'],
            'productStock' => ['required'],
            'type' => ['required'],
        ]);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
            ]);
            $image = $request->file('image');
            $imageName = time().'.'.$request->image->extension();
            $path = $image->storeAs('uploads', $imageName, 'public');
            $data->image = '/storage/'.$path;
        }

        $data->productName = $input['productName'];
        $data->description = $input['description'];
        $data->productPrice = $input['productPrice'];
        $data->productStock = $input['productStock'];
        $data->type = $input['type'];

        $data->save();
       
        
        return redirect()->route('product')->with('success','Data Created Successfully');

    }

    public function delete($id){
        $data=Product::findOrFail($id);
        $data->delete();
        return redirect()->route('product')->with('success','Data Deleted Successfully');
    }

    public function get_product($id){
        $data = Product::where('type', $id)->get();

        return view('userproduct', compact('data'));
    }
}
