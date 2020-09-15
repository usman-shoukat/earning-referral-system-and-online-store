<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Product;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return  view('admin.addblog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = Blog::orderBy('id', 'DESC')->paginate(20);
        return view('blog')->with('blog',$blog);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('imqge');
        $new_name = rand() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('admin/blog/'), $new_name);
        $form_data = array(
            'artname' => $request->artname,
            'title' => $request->title,
            'shortdec' => $request->shortdec,
            'dec' => $request->dec,
            'qoute' => $request->qoute,
            'imqge' =>  $new_name
        );

        Blog::create($form_data);
        return redirect('addblog')->with(['success' => true, 'message' => 'Your Blog Add Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $blog = Blog::orderBy('id', 'DESC')->paginate(20);
        return view('admin.showblog')->with('blog',$blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function viewmore($id)
    {
        $getalladmins = Blog::where('id',$id)->first();
        return view('showblogmore')->with('getalladmins',$getalladmins);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function delblog($id)
    {
         $getalladmins = Blog::where('id',$id)->delete();
        return redirect('showblog');
    }
}
