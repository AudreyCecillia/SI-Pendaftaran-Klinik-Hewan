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
}