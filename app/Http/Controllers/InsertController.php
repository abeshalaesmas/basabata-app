<?php

namespace App\Http\Controllers;

use App\Models\Chapters;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function show(){
        $chapters = Chapters::all();
        return view('show', ['chapters' => $chapters]);
    }

    

    public function insert(){
        return view('insert');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:100',
            'content' => 'required|max:99999999'
        ]);

        Chapters::create($request->all());

        return redirect('/chapters');
    }

    public function delete(Request $request){
        $chapters = Chapters::find($request->id);

        if($chapters){
            $chapters->delete();
        }

        return redirect('/chapters');
    }
}
