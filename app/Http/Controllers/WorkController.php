<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class WorkController extends Controller
{


    //sobrancelhas

    public function sobrancelhas(){
        $files = scandir(public_path("/img/sobrancelhas"));
        $page = Page::find(5);
        return view('works.trabalhos-sobrancelhas')->with('data', $files)->with('page', $page);
    }

    public function listSobrancelhas(){
        $files = scandir(public_path("/img/sobrancelhas"));
        return view('admin.list-sobrancelha')->with('data', $files);
    }

    public function addSobrancelhas(Request $request){
        if ($request->has('picture')) {
            $request->file('picture')->move(public_path("/img/sobrancelhas"), date("Y.m.d-H.i.s").".jpg");
            $files = scandir(public_path("/img/sobrancelhas"));
            return view('admin.list-sobrancelha')->with('data', $files)->with('return', true);
        }
        else {
            $files = scandir(public_path("/img/sobrancelhas"));
            return view('admin.list-sobrancelha')->with('data', $files)->with('return', false);
        }

    }

    public function deleteSobrancelhas($id){
        $file = public_path("/img/sobrancelhas/".$id);
        unlink($file);
        $files = scandir(public_path("/img/sobrancelhas"));
        return json_encode($file);
    }


    //maquiagens

    public function maquiagens(){
        $files = scandir(public_path("/img/maquiagem"));
        $page = Page::find(6);
        return view('works.trabalhos-maquiagem')->with('data', $files)->with('page', $page);
    }

    public function listMaquiagens(){
        $files = scandir(public_path("/img/maquiagem"));
        return view('admin.list-maquiagem')->with('data', $files);
    }

    public function addMaquiagens(Request $request){
        if ($request->has('picture')) {
            $request->file('picture')->move(public_path("/img/maquiagem"), date("Y.m.d-H.i.s").".jpg");
            $files = scandir(public_path("/img/maquiagem"));
            return view('admin.list-maquiagem')->with('data', $files)->with('return', true);
        }
        else {
            $files = scandir(public_path("/img/maquiagem"));
            return view('admin.list-maquiagem')->with('data', $files)->with('return', false);
        }

    }

    public function deleteMaquiagens($id){
        $file = public_path("/img/maquiagem/".$id);
        unlink($file);
        $files = scandir(public_path("/img/maquiagem"));
        return json_encode($file);
    }


    //manicure

    public function manicure(){
        $files = scandir(public_path("/img/manicure"));
        $page = Page::find(4);
        return view('works.trabalhos-manicure')->with('data', $files)->with('page', $page);
    }

    public function listManicure(){
        $files = scandir(public_path("/img/manicure"));
        return view('admin.list-manicure')->with('data', $files);
    }

    public function addManicure(Request $request){
        if ($request->has('picture')) {
            $request->file('picture')->move(public_path("/img/manicure"), date("Y.m.d-H.i.s").".jpg");
            $files = scandir(public_path("/img/manicure"));
            return view('admin.list-manicure')->with('data', $files)->with('return', true);
        }
        else {
            $files = scandir(public_path("/img/manicure"));
            return view('admin.list-manicure')->with('data', $files)->with('return', false);
        }

    }

    public function deleteManicure($id){
        $file = public_path("/img/manicure/".$id);
        unlink($file);
        $files = scandir(public_path("/img/manicure"));
        return json_encode($file);
    }

    //cabelos

    public function cabelos(){
        $files = scandir(public_path("/img/cabelos"));
        $page = Page::find(7);
        return view('works.trabalhos-cabelo')->with('data', $files)->with('page', $page);
    }

    public function listCabelos(){
        $files = scandir(public_path("/img/cabelos"));
        return view('admin.list-cabelo')->with('data', $files);
    }

    public function addCabelos(Request $request){
        if ($request->has('picture')) {
            $request->file('picture')->move(public_path("/img/cabelos"), date("Y.m.d-H.i.s").".jpg");
            $files = scandir(public_path("/img/cabelos"));
            return view('admin.list-cabelo')->with('data', $files)->with('return', true);
        }
        else {
            $files = scandir(public_path("/img/cabelos"));
            return view('admin.list-cabelo')->with('data', $files)->with('return', false);
        }

    }

    public function deleteCabelos($id){
        $file = public_path("/img/cabelos/".$id);
        unlink($file);
        $files = scandir(public_path("/img/cabelos"));
        return json_encode($file);
    }
}
