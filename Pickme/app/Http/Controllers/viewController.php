<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function index()
    {

        $ads = DB::table('products')->orderby('created_at' , 'DESC')->paginate(30);
        return view('welcome' , ['ads'=>$ads] ,compact('ads'));
        //à revoir ici
    }
   function search(Request $request)
   {
        $search = $request->get('search');
        $ads = DB::table('products')->where('title','like', '%'.$search.'%')
        ->orWhere('description','like', '%'.$search.'%')
        ->orWhere('price','like', '%'.$search.'%')
        ->orWhere('location','like', '%'.$search.'%')
        ->orderby('created_at', 'DESC')
        ->paginate(5);
       
        return view('welcome', ['products'=> $products]);
    }   
}
// //'title',
// 'descriptin',
// 'price',
// 'location',