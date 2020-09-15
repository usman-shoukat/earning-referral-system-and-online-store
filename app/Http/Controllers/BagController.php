<?php

namespace App\Http\Controllers;

use App\Bag;
use App\Blog;
use App\Product;
use Illuminate\Http\Request;

class BagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {

        $totalbusinesscount = Bag::where('user_id',auth()->user()->id)->get();
$totalbusiness = Bag::where('user_id',auth()->user()->id)->sum('q_pricetotal');
        return  view('checkout')->with('totalbusinesscount',$totalbusinesscount)
->with('totalbusiness', $totalbusiness );
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
    public function store($id)
    {
        $cart = Product::where('id' , $id)->first();
        $carttitle = $cart->pro_title;
        $cartprice = $cart->pro_price;

        $form_data = array(
            'carttitle' => $carttitle,
            'price' => $cartprice,
            'pro_id' => $id,
            'user_id' => auth()->user()->id,
            'pro_quantity' => 1,
            'q_pricetotal' => $cartprice,
        );

        Bag::create($form_data);
        return redirect('home')->with(['success' => true, 'message' => 'Your Product Successfully Add']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bag  $bag
     * @return \Illuminate\Http\Response
     */
    public function cart($id)
    {
        $cart = Product::where('id',$id)->first();
        $carttitle = $cart->pro_title;
        $cartprice = $cart->pro_price;
        $form_data = array(
            'carttitle' => $carttitle,
            'price' => $cartprice,
            'pro_id' => $id,
            'user_id' => auth()->user()->id,
            'pro_quantity' => 1,
            'q_pricetotal' => $cartprice,
        );

        Bag::create($form_data);
        return redirect()->route('productdetails',['id'=> $id])->with(['success' => true, 'message' => 'Your Product Successfully Add']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bag  $bag
     * @return \Illuminate\Http\Response
     */
    public function cartproduct()
    {

        $totalbusinesscount = Bag::where('user_id',auth()->user()->id)->get();
$totalbusiness = Bag::where('user_id',auth()->user()->id)->sum('q_pricetotal');
        return  view('bag')->with('totalbusinesscount',$totalbusinesscount)
->with('totalbusiness', $totalbusiness );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bag  $bag
     * @return \Illuminate\Http\Response
     */
    public function updatecart(Request $request, $id)
    {
       $proquantity = $request->quantity;
        $addbalenceuser = Bag::where(['id' => $id])->first();
        $addbalence = $addbalenceuser->price;
        $q_pricetotal = $proquantity  * $addbalence;
        $totalbusinesscount = Bag::where('id',$id)
       ->update(['pro_quantity' => $proquantity ,'q_pricetotal' => $q_pricetotal]);

        return redirect()->route('cartproduct')
            ->with(['success' => true, 'message' => 'Your Cart Successfully Update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bag  $bag
     * @return \Illuminate\Http\Response
     */
    public function delcart($id)
    {
        $addbalenceuser = Bag::where(['id' => $id])->delete();
        return redirect()->route('cartproduct')
            ->with(['delete' => true, 'message' => 'Your Cart Successfully Delete']);
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
