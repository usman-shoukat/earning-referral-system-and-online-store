<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Mainimage;
use App\Offerimage;
class ImageController extends Controller
{
    public function addmainimg(){
        $getalladmin = Mainimage::orderBy('id', 'DESC')->paginate(10);
        return view('admin.addmianimg', ['getalladmin' => $getalladmin]);

    }
    public function delmainimg($id){
        $addapp = Mainimage::where('id', $id)->delete();
        return redirect()->route('addmainimg');

    }
    public function addmainimge(Request $request){

        $img = $request->file('image');
        $new_name = rand() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('admin/mainimg/'), $new_name);
        $form_data = array(
            'title' => $request->title,
            'dec' => $request->dec,
            'image' =>  $new_name
        );

        Mainimage::create($form_data);
        return redirect('addmainimg')->with(['success' => true, 'message' => 'Your Image Add Successfully']);

    }
    public function showofferimg(){
        $getalladmin = Offerimage::orderBy('id', 'DESC')->paginate(10);
        return view('admin.showofferimg', ['getalladmin' => $getalladmin]);

    }
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'date' => 'required|date_format:y-m-d',
        ]);
    }
    public function offeraddmainimge(Request $request){

        $img = $request->file('image');
        $new_name = rand() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('admin/offerimg/'), $new_name);
        $form_data = array(
            'title' => $request->title,
            'date' => $request->date,
            'image' =>  $new_name
        );

        Offerimage::create($form_data);
        return redirect('showofferimg')->with(['success' => true, 'message' => 'Your Image Add Successfully']);

    }
}
