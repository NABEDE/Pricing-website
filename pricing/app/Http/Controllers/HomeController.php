<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\products;
use App\orders;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $id_user = Auth::id();
        $command = Orders::all()->where('id_client', $id);
        return view('home')->with('orders', $command);
    }

    public function indexSh()
    {
        $id_user = Auth::id();
        $command = Orders::all()->where('id_client', $id_user);
        return view('home')->with('orders', $command);
    }

    public function show()
    {
        $products = Products::all();
        return view('liste-product')->with('product', $products);
    }

    public function FindProduct($id)
    {
         $productID = Products::all()->where('id', $id);
         return view('checkout')->with('productID', $productID);
    }

}
