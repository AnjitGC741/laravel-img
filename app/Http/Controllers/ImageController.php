<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function saveImg(Request $req)
    {
        // dd($req->all());
        if($req->hasFile('img'))
        {
        $image = $req -> file('img');
        $image->store('images','public');
        $file_path=$image->store('images','public');
        Image::create([//name of model form database table name error insert into ....
            'img'=> $file_path,
        ]);

        return back();
        }
    }
}
