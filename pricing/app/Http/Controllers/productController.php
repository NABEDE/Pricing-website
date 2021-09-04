<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\products;
use App\orders;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Redirect;


class productController extends Controller
{
    //
    public function sendOrder(Request $requet, $id_pro)
    {
        $validated = $requet->validate([
            //'firstname' => 'required|unique:posts|max:255',
            'firstname' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'address' => 'required',
            'country' => 'required',
            'zip' => 'required',
        ]);

        $DateActuelle = Carbon::now();
        $DateExpiration = Carbon::now()->addMonth();

        $productID = Products::all()->where('id', $id_pro);
        $id_user = Auth::id();
        $productSend = new orders();
        $requet  -> input();
        $productSend ->firstname = $requet ->firstname;
        $productSend ->lastname = $requet ->lastName;
        $productSend ->email = $requet ->email;
        $productSend ->address = $requet ->address;
        $productSend ->adress2 = $requet ->address2;
        $productSend ->country = $requet ->country;
        $productSend ->zip = $requet ->zip;
        $productSend ->id_client = $id_user;
        $productSend ->id_product = $id_pro;
        $productSend ->dateexpiration = $DateExpiration;
        $productSend ->suspendu = "non";
        $productSend ->product_name = $id_pro;
        $productSend -> save();
        #return view('checkout')->with('message', 'Your order is received');
        return view('checkout')->with('productID', $productID);

    }

    public function printProduct()
    {
        $products = Products::all();
        return view('liste-product')->with('product', $products);
    }
    public function stopOrder($id, Request $req)
    {
        $prod_modif = Orders::find($id);

        if($prod_modif)
        {
            $prod_modif->suspendu = "oui";
            $prod_modif->save();
        }

        $id_user = Auth::id();
        $command = Orders::all()->where('id_client', $id_user);
        return Redirect::back()->with('orders', $command);
    }

    public function startOrder($id, Request $req)
    {
        $prod_modif_start = Orders::find($id);

        if($prod_modif_start)
        {
            $prod_modif_start->suspendu = "non";
            $prod_modif_start->save();
        }

        $id_user = Auth::id();
        $command = Orders::all()->where('id_client', $id_user);
        return Redirect::back()->with('orders', $command);
    }

}
