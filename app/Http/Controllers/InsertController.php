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

    public function showOne(Request $request){
        $chapter = Chapters::find($request->id);
        return view('/show-one', ['chapter' => $chapter]);
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

    public function edit(Request $request){
        $chapter = Chapters::find($request->id);

        if(!$chapter){
            return redirect('/chapters');
        }

        return view('edit', ['chapter' => $chapter]);
    }

    public function update(Request $request){

        $request->validate([
            'title' => 'required|max:100',
            'content' => 'required|max:99999999'
        ]);

        $chapter = Chapters::find($request->id);
        $chapter->update($request->all());

        return redirect()->route('showOne', ['id' => $chapter->id])->with('success');
    }

    public function delete(Request $request){
        $chapters = Chapters::find($request->id);

        if($chapters){
            $chapters->delete();
        }

        return redirect('/chapters');
    }
}
