<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function saveImg(Request $req)
    {
        // dd($req->all());
        if($req->hasFile('uploadedImg'))
        {
        $image = $req -> file('uploadedImg');
        $image->store('images','public');
        // $file_path=$image->store('images','public');


        return back();
        }
    }
}
