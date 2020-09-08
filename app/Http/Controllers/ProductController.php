<?php

namespace App\Http\Controllers;

use App\Product;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

public function index(){
$products = Product::all();
return view('test.products',['products' => $products]);
}

public function destroy($id){
Product::destroy($id);
return redirect('/test/products');
}

public function newProduct(){
return view('test.new');
}

public function add(Request $request) {


   
    
$file = $request->file('file');
$extension = $file->getClientOriginalExtension();
Storage::disk('local')->put(
    $file->getFilename().'.'.$extension,File::get($file));
$entry = new \App\File;

$entry->mime = $file->getClientMimeType();
$entry->original_filename = $file->getClientOriginalName();
$entry->filename = $file->getFilename().'.'.$extension;

$entry->save();

$product = new Product();

$product->file_id=$entry->id;

$product->name = $request->input('name');
$product->description =$request->input('description');
$product->price =$request->input('price');
$product->imageurl =$request->input('imageurl');

$product->save();

$products = Product::all();
return redirect('/test/products')->with(['products' => $products]);

}
}