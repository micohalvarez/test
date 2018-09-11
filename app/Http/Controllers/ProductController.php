<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Product;
use Image;

class ProductController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    
    }

    public function productItem($product_id)
    {
        //
        
        $product = DB::table('products')->where('id', $product_id)->first();
        return view('proditem')->withProduct($product);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $products = Product::all();
        return view('products')->withProducts($products);
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('memory_limit','512M');
        //
        $this->validate($request, array(
                'title' => 'required|max:255'
        ));

        $product = new Product;
      
        $product->title = $request->title;
        $product->overview = $request->overview;
        $product->concept = $request->concept;
        $product->type = $request->type;
        $product->feature = $request->feature;

        $image = $request->file('webBgImage');
        $filename = time() . 'wbi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
      
        $product->webBgImage = $filename;
        
         $image = $request->file('mobileBgImage');
        $filename = time() . 'mbi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
   
        $product->mobileBgImage = $filename;

        $image = $request->file('productLogo');
        $filename = time() . 'pl.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
   
        $product->productLogo = $filename;

        $image = $request->file('monitorImage');
        $filename = time() . 'mi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
   
        $product->monitorImage = $filename;

        $image = $request->file('conceptImage1');
        $filename = time() . 'ci1.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
    
        $product->conceptImage1 = $filename;

        $image = $request->file('conceptImage2');
        $filename = time() . 'ci2.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
        Log::debug('Some message.CI2 '. $filename);
        $product->conceptImage2 = $filename;

        $image = $request->file('conceptImage3');
        $filename = time() . 'ci3.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
        Log::debug('Some message.CI3 '. $filename);
        $product->conceptImage3 = $filename;

        $image = $request->file('conceptImage4');
        $filename = time() . 'ci4.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
        Log::debug('Some message. CI4 '. $filename);
        $product->conceptImage4 = $filename;

        $image = $request->file('featureImage');
        $filename = time() . 'fi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
        Log::debug('Some message. FEATIMAGE'. $filename);
        $product->featureImage = $filename;
        
        $product->save();




        // foreach ($request->overviewPhotos as $photo) {
        //     $filename = time() . '.' . $photo->getClientOriginalExtension();
        //     $location = public_path('images/projectoverview' . $filename);
        //     Image::make($photo)->save($location);

        //     ProjectsOverviewPhoto::create([
        //         'product_id' => $project->id,
        //         'filename' => $filename
        //     ]);
        // }

        // foreach ($request->conceptPhotos as $photo) {
        //     $filename = time() . '.' . $photo->getClientOriginalExtension();
        //     $location = public_path('images/projectconcepts' . $filename);
        //     Image::make($photo)->save($location);

        //     ProjectsOverviewPhoto::create([
        //         'product_id' => $project->id,
        //         'filename' => $filename
        //     ]);
        // }

        // foreach ($request->featPhotos as $photo) {
        //     $filename = time() . '.' . $photo->getClientOriginalExtension();
        //     $location = public_path('images/projectfeatures' . $filename);
        //     Image::make($photo)->save($location);

        //     ProjectsOverviewPhoto::create([
        //         'product_id' => $project->id,
        //         'filename' => $filename
        //     ]);
        // }
      
        
        return redirect()->route('products.create');
       

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request,$id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $product = Product::find($id);

        $product->title = $request->input('title');
        $product->type = $request->input('type');
        $product->overview = $request->input('overview');
        $product->concept = $request->input('concept');
        $product->feature = $request->input('feature');
        
        $image = $request->file('webBgImage');
        $filename = time() . 'wbi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
      
        $product->webBgImage = $filename;
        
         $image = $request->file('mobileBgImage');
        $filename = time() . 'mbi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
   
        $product->mobileBgImage = $filename;

        $image = $request->file('productLogo');
        $filename = time() . 'pl.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
   
        $product->productLogo = $filename;

        $image = $request->file('monitorImage');
        $filename = time() . 'mi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
   
        $product->monitorImage = $filename;

        $image = $request->file('conceptImage1');
        $filename = time() . 'ci1.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
    
        $product->conceptImage1 = $filename;

        $image = $request->file('conceptImage2');
        $filename = time() . 'ci2.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
        Log::debug('Some message.CI2 '. $filename);
        $product->conceptImage2 = $filename;

        $image = $request->file('conceptImage3');
        $filename = time() . 'ci3.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
        Log::debug('Some message.CI3 '. $filename);
        $product->conceptImage3 = $filename;

        $image = $request->file('conceptImage4');
        $filename = time() . 'ci4.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
        Log::debug('Some message. CI4 '. $filename);
        $product->conceptImage4 = $filename;

        $image = $request->file('featureImage');
        $filename = time() . 'fi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);
        Log::debug('Some message. FEATIMAGE'. $filename);
        $product->featureImage = $filename;
        
        $product->save();

        return redirect()->route('products.create');
       
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function mindex()
    {
        //
        $products = Product::all();
        return view('mobile.mproducts')->withProducts($products);
    }

    public function mproductItem($product_id)
    {
        //
        
        $product = DB::table('products')->where('id', $product_id)->first();
        return view('mobile.mproditem')->withProduct($product);
    }

    public function editItem($product_id)
    {
        //
        
        $product = DB::table('products')->where('id', $product_id)->first();
        return view('admin/addproduct')->with('product', $product);
    }

    
    public function deleteItem($product_id)
    {

        DB::table('products')->where('id',$product_id)->delete();
        DB::statement("SET @count = 0;");
         DB::statement("UPDATE `products` SET `products`.`id` = @count:= @count + 1;");
        DB::statement("ALTER TABLE `products` AUTO_INCREMENT = 1;");
        return redirect()->route('products.create');
        
    }

}