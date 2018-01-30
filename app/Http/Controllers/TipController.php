<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Tip;
use Auth;

class TipController extends Controller
{
    public function index(){
        $tips = Tip::all();
        $page = Page::find(2);
        return view('dicas')->with('data', $tips)->with('page', $page);
    }

    public function register(){
        return view('admin.new-dica');
    }

    public function insert(Request $request){
        $tip = new Tip;
        $tip->title = $request->title;
        $tip->body = $request->body;
        $tip->title_color = $request->title_color;
        $tip->body_color = $request->body_color;
        $tip->user_id = Auth::user()->id;
        $tip->save();
        return view('admin.new-dica')->with('return', $tip);
    }

    public function select(){
        $tips = Tip::all();
        return view('admin.list-dica')->with('data', $tips);
    }

    public function selectById($id){
        $tip = Tip::find($id);
        return view('admin.edit-dica')->with('data', $tip);
    }

    public function delete($id){
        $tip = Tip::find($id);
        $tip->delete();
        return $tip;
    }

    public function update(Request $request){
        $tip = Tip::find($request->id);
        $tip->title = $request->title;
        $tip->body = $request->body;
        $tip->title_color = $request->title_color;
        $tip->body_color = $request->body_color;
        $tip->save();
        $tips = Tip::all();
        return view('admin.list-dica')->with('data', $tips);
    }
}
