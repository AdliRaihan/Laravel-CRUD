<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class posts extends Controller
{
    
    public function store(Request $request){
        echo $request->Name;
        $validatedData = $request->validate([
            'Name' => 'required|min:4|max:25',
            'Nick' => 'required|min:4|max:12',
        ]);
    }
}
