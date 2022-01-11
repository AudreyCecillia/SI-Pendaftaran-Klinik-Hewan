<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index(){
        return view("data.index");
    }
}

class DataController extends Controller
{
    public function daftar(){
        return view("data.daftar");
    }
}

class DataController extends Controller
{
    public function add(){
        return view("data.add");
    }

    public function addProcess(Request $request){
        $this->validate($request,[
            'data_namapemilik' => 'required|max:30',
            'data_alamatpemilik'  => 'required|max:1000',
            'data_notelepon'  => 'required|number',
            'data_namahewan'  => 'required|max:30',
            'data_umurhewan'  => 'required|number',
            'data_jenishewan'  => 'required|max:30',
            'data_rashewan'  => 'required|max:30',
            'data_namahewan'  => 'required|max:30'
        ]);

    return view('data.show', ['daftar' => $request]);
    }
};