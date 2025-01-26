<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function showChapters () {
        return view('chapters.chapter-selection');
    }

    public function showGlossary () {
        return view('glossary');
    }

    public function showGame3 () {
        return view('sentence');
    }
}
