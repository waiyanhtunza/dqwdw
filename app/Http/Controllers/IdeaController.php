<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{

    public function show(Idea $idea)
    {
        
        return view("ideas.show", [
            "idea"=> $idea
        ]);
    }
    public function store()
    {
        request()->validate([
            "idea"=> "required|min:10|max:200",
        ]);
       
        $idea = Idea::create(
            [
            'content'=>request()->get('idea',''),
            ]
        );
        return redirect()->route('dashboard')->with('success','Your Create idea is successful!');
       
    }

    public function destory(Idea $idea)
    {
        $idea->delete();
        return redirect()->route('dashboard')->with('success','Your delete idea is successful!');

    }
}
