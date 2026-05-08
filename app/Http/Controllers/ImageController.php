<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('Image.upload');
    }

    public function list()
    {
        $images = Image::all();
        return view('Image.list',compact('images'));

    }

    public function store1(Request $request){

        $request->validate([
            'file'=>'required',
        ]);

        if($request->hasFile('file')){
             $imageName = $request->file('file')->getClientOriginalName();

             $newName = time() . '-' . $imageName;
             // The below function will save the image in public folder, under the selected directory
             $request->file('file')->move("method1",$newName);

             $image = new Image();
             $image->name = $imageName;
             $image->path= "/method1/".$newName;
             $image->save();

             return redirect()->route('listImage');
        }else{
            return "image not received";
        }


    }

    public function store2(Request $request){

        $request->validate([
            'file'=>'required',
        ]);

        if($request->hasFile('file')){
            $imageName = $request->file('file')->getClientOriginalName();

            $newName = time() . '-' . $imageName;
            // The below function will save the image in storage public folder, under the selected directory
            $request->file('file')->storeAs("method2",$newName,'public');

            $image = new Image();
            $image->name = $imageName;
            $image->path= "storage/method2/".$newName;
            $image->save();

            return redirect()->route('listImage');
        }else{
            return "image not received";
        }


    }

    public function store3(Request $request){

        $request->validate([
            'file'=>'required',
        ]);

        if($request->hasFile('file')){
            $imageName = $request->file('file')->getClientOriginalName();

            // The below function will save the image in storage public folder, under the selected directory
            $path =   $request->file('file')->store("method3",'public');

            $image = new Image();
            $image->name = $imageName;
            $image->path= "storage/".$path;
            $image->save();

            return redirect()->route('listImage');
        }else{
            return "image not received";
        }


    }


}
