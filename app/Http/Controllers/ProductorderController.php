<?php

namespace App\Http\Controllers;

use App\Productorder;
use App\Bag;
use App\Order;
use Auth;
use Illuminate\Http\Request;

class ProductorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function weborder()
    {
         $getalladmin = Order::with('user')->with('product')->where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('orders')->with('getalladmin', $getalladmin);
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

        $getcartitems = Bag::where('user_id',auth()->user()->id)->get();
        $new = new Productorder();
        $new->user_id = Auth::user()->id;
        $new->fname = $request['fname'];
        $new->lname = $request['lname'];
        $new->number = $request['number'];
        $new->email = $request['email'];
        $new->add1 = $request['add1'];
        $new->add2 = $request['add2'];
        $new->city = $request['city'];
        $new->zip = $request['zip'];
        $new->save();

        $order_id =  $new->id;

        foreach ($getcartitems as $data) {

        $pro_id = $data['pro_id']; 
        $pro_quantity = $data['pro_quantity'];
        $q_pricetotal = $data['q_pricetotal'];
        $OrderPro = new Order;
        $OrderPro->productorder_id = $order_id;
        $OrderPro->user_id = auth()->user()->id;
        $OrderPro->quantity = $data['pro_quantity'];
        $OrderPro->product_id = $data['pro_id'];
        $OrderPro->total = $data['q_pricetotal'];
        $OrderPro->save();
    }
 $getcart = Bag::where('user_id',auth()->user()->id)->delete();
        return redirect('checkout')->with(['success' => true, 'message' => 'Your Product Add Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productorder  $productorder
     * @return \Illuminate\Http\Response
     */
    public function show(Productorder $productorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productorder  $productorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Productorder $productorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productorder  $productorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productorder $productorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productorder  $productorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productorder $productorder)
    {
        //
    }
}
