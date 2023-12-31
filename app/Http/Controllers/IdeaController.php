<?php

namespace App\Http\Controllers;

use App\Models\Idea;

class IdeaController extends Controller
{
    public function store() {

        request()->validate([
            'idea'=>'required|max:240|min:4'
        ]);

     Idea::create([
        'content'=>request()->get('idea', '')
    ]);


   return redirect()->route('dashboard')->with('success','Idea created successfully');
    }
}
