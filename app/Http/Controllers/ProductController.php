<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.addproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $img = $request->file('pro_img');
        $new_name = rand() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('admin/'), $new_name);
        $form_data = array(
            'pro_title' => $request->pro_title,
            'pro_price' => $request->pro_price,
            'pro_cat' => $request->pro_cat,
            'pro_dec' => $request->pro_dec,
            'pro_img' =>  $new_name
        );

        Product::create($form_data);
return redirect('addproduct')->with(['success' => true, 'message' => 'Your Product Add Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $getalladmin = Product::orderBy('id', 'DESC')->paginate(10);
        return view('admin.showproduct', ['getalladmin' => $getalladmin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $re = $id;
        $uppro = Product::find($id);
        return  view('admin.updateproduct')->with('uppro',$uppro)->with('re', $re);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $uppro = Product::find($id);
        $img = $request->file('pro_img');
        $new_name = rand() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('admin/'), $new_name);

        $uppro->pro_title = $request->input('pro_title');
        $uppro->pro_price = $request->input('pro_price');
        $uppro->pro_cat   = $request->input('pro_cat');
        $uppro->pro_dec   = $request->input('pro_dec');
        $uppro->pro_img   = $new_name;
        $uppro->save();
        return redirect('showproduct')->with(['success' => true, 'message' => 'Your Product Update Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $addapp = Product::where('id', $id)->delete();
        return redirect()->route('showproduct');

    }
}
