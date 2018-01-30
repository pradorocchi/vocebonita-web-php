<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Promotion;
use Auth;

class PromotionController extends Controller
{
    public function index(){
        $promotions = Promotion::all();
        $page = Page::find(1);
        return view('precos')->with('data', $promotions)->with('page', $page);
    }

    public function register(){
        return view('admin.new-promocao');
    }

    public function insert(Request $request){
        $promotion = new Promotion;
        $promotion->title = $request->title;
        $promotion->body = $request->body;
        $promotion->title_color = $request->title_color;
        $promotion->body_color = $request->body_color;
        $promotion->user_id = Auth::user()->id;
        $promotion->save();
        return view('admin.new-promocao')->with('return', $promotion);
    }

    public function select(){
        $promotions = Promotion::all();
        return view('admin.list-promocao')->with('data', $promotions);
    }

    public function selectById($id){
        $promotion = Promotion::find($id);
        return view('admin.edit-promocao')->with('data', $promotion);
    }

    public function delete($id){
        $promotion = Promotion::find($id);
        $promotion->delete();
        return $promotion;
    }

    public function update(Request $request){
        $promotion = Promotion::find($request->id);
        $promotion->title = $request->title;
        $promotion->body = $request->body;
        $promotion->title_color = $request->title_color;
        $promotion->body_color = $request->body_color;
        $promotion->save();
        $promotions = Promotion::all();
        return view('admin.list-promocao')->with('data', $promotions);
    }
}
