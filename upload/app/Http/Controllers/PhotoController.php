<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    
    public function uploadimages(Request $request){
        // $destinationPath = 'D:\image';
        // $path = $request->file('avatar')->store($destinationPath);
        $files = $request->allFiles('image');       
        $count = 0;       
        foreach ($files as $file) {
                $file->store('public/uploads');
                $count++;
                //this technic also not work
                /* $name= $file->getClientOriginalName();
                   $file->move('public/uploads', $name);
                   $images[]=$name;*/
           }
           //$count return only 1(it only upload one file)
           return response()->json($count, 201);
}

    
}
