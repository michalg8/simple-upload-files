<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $images = Image::paginate(3);
        return view('panel.main', compact('images'));
    }

    public function create(){
        return view('panel.form');
    }

    public function store(Request $request){
        $image = new Image();
        $image->image_path = $request->file('image')->store('image');
        $image->save();
        return redirect('/create');
    }
}
