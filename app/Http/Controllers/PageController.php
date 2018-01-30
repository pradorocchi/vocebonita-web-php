<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($id){
        $page = Page::find($id);
        return view('admin.edit-page')->with('data', $page);
    }

    public function update(Request $request){
        $page = Page::find($request->id);
        $page->title = $request->title;
        $page->description = $request->description;
        $page->save();
        return view('home');
    }
}
