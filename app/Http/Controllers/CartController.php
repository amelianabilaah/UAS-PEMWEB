<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\AlamatPengiriman;
use APP\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __invoke()
    {
        // ...
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itemuser = $request->user();
        $itemcart = cart::where('user_id', $itemuser->id)
                        ->where('status_cart', 'cart')
                        ->first();
        $itemalamatpengiriman = AlamatPengiriman::where('user_id', $itemuser->id)
                                                ->where('status','utama')
                                                ->first();
        $checkout = cart::where('user_id', $itemuser->id)
                        ->where('status_cart', 'checkout')
                        ->first();
        if ($itemcart) {
            $data = array('title' => 'Shopping Cart',
                          'itemcart' => $itemcart);
            return view('cart.index', $data)->with('no', 1);
        } elseif($checkout){
            $data = array('title' => 'Checkout',
            'checkout' => $checkout,
            'itemalamatpengiriman' => $itemalamatpengiriman);
            return view('cart.checkout', $data)->with('no', 1);
        }else{
            return view('cart.emptycart')->with('no', 1);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function kosongkan($id) {
        $itemcart = cart::findOrFail($id);
        $itemcart->detail()->delete();
        $itemcart->updatetotal($itemcart, '-'.$itemcart->subtotal);
        return back()->with('success', 'Cart has been emptied successfully');
    }

    public function checkout(Request $request) {
        $itemuser = $request->user();
        $itemcart = cart::where('user_id', $itemuser->id)
                        ->where('status_cart', 'cart')
                        ->first();
        $itemalamatpengiriman = AlamatPengiriman::where('user_id', $itemuser->id)
                                                ->where('status','utama')
                                                ->first();

        if($itemcart) {
            $itemcart->status_cart = 'checkout';
            $itemcart->save();
            $checkout=$itemcart;
            $data = array('title' => 'checkout',
                          'checkout' => $checkout,
                          'itemalamatpengiriman' => $itemalamatpengiriman);
            return view('cart.checkout', $data)->with('no', 1);
        } else {
            return abort ('404');
        }
    }
    public function view_order(){
        $itemuser= Auth::user();
        $checkout = cart::where('user_id', $itemuser->id)
                        ->where('status_cart', 'checkout')
                        ->first();
        $itemalamatpengiriman = AlamatPengiriman::where('user_id', $itemuser->id)
                        ->where('status','utama')
                        ->first();
        if($itemalamatpengiriman){
            return view('order', compact('checkout', 'itemalamatpengiriman'));
        }
        return redirect()->back()->with('error', 'You have to add an address!');
    }

    public function get_order()
    {
        $checkout = cart::where('status_cart', 'checkout')
        ->get();

        return view('penjualan', compact('checkout'));
    }
}
