<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function showChapters () {
        return view('chapters.chapter-selection');
    }
}