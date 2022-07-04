<?php

namespace App\Http\Controllers;

use App\Models\cartDetail;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Http\Request;

class CartDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       
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
        $this->validate($request, [
            'product_id' => 'required',
        ]);

        $itemuser = $request->user();
        $itemproduk = Product::findOrFail($request->product_id);

        //untuk cek shopping cart user yang sedang login
        $cart = cart::where('user_id', $itemuser->id)
                    ->where('status_cart', 'cart')
                    ->first();
        
        if ($cart) {
            $itemcart = $cart;
        } else {
            $no_invoice = cart::where('user_id', $itemuser->id)->count();

            //cari jumlah cart berdasar user yang sedang
            $inputancart['user_id'] = $itemuser->id;
            $inputancart['no_invoice'] = 'INV '.str_pad(($no_invoice + 1),'3','0', STR_PAD_LEFT);
            $inputancart['status_cart'] = 'cart';
            $inputancart['status_pembayaran'] = 'belum';
            $inputancart['status_pengiriman'] = 'belum';
            $itemcart = cart::create($inputancart);
        }

        //cek apakah shopping cart sudah ada produk
        $cekdetail = cartDetail::where('cart_id', $itemcart->id)
                               ->where('product_id', $itemproduk->id)
                               ->first();
        $productStock = 1;
        $productPrice = $itemproduk->productPrice;
        $subtotal = ($productStock * $productPrice);

        if ($cekdetail) {
            //update detail di table cart_details
            $cekdetail->updatedetail($cekdetail, $productStock, $productPrice);
            //update subtotal dan total di table carts
            $cekdetail->cart->updatetotal($cekdetail->cart, $subtotal);
        } else {
            $inputan = $request->all();
            $inputan['cart_id'] = $itemcart->id;
            $inputan['product_id'] = $itemproduk->id;
            $inputan['productStock'] = $productStock;
            $inputan['productPrice'] = $productPrice;
            $inputan['subtotal'] = ($productPrice * $productStock);
            $itemdetail = cartDetail::create($inputan);
            //update subtotal dan total di table carts
            $itemdetail->cart->updatetotal($itemdetail->cart, $subtotal);
        }
        return redirect()->route('cart.index')->with('success', 'Product successfully added to cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cartDetail  $cartDetail
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
     * @param  \App\Models\cartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $itemdetail = cartDetail::findOrFail($id);
        $param = $request->param;

        if ($param == 'tambah') {
            //update detail cart
            $productStock = 1;
            $itemdetail->updatedetail($itemdetail, $productStock, $itemdetail->productPrice);
            //update total cart
            $itemdetail->cart->updatetotal($itemdetail->cart, $itemdetail->productPrice);
            return back()->with('success', 'Item successfully updated');
        }
        if ($param == 'kurang') {
            //update detail cart
            $productStock = 1;
            $itemdetail->updatedetail($itemdetail, '-'.$productStock, $itemdetail->productPrice);
            //update total cart
            $itemdetail->cart->updatetotal($itemdetail->cart, '-'.$itemdetail->productPrice);
            return back()->with('success', 'Item successfully updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemdetail = cartDetail::findOrFail($id);
        //update total cart
        $itemdetail->cart->updatetotal($itemdetail->cart, '-'.$itemdetail->subtotal);
        if ($itemdetail->delete()) {
            return back()->with('success', 'Item deleted successfully ');
        } else {
            return back()->with('error', 'Item failed to delete');
        }
    }
}
