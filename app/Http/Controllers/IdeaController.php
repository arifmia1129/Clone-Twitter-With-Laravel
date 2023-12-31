<?php

namespace App\Http\Controllers;

use App\Models\Idea;

class IdeaController extends Controller
{
    public function store() {
     Idea::create([
        'content'=>request()->get('idea', '')
    ]);


   return redirect()->route('dashboard')->with('success','Idea created successfully');
    }
}
