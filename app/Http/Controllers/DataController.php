<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index(){
        return view("datahewan.index");
    }
}

class DataController extends Controller
{
    public function daftar(){
        return view("datahewan.daftar");
    }
}

class DataController extends Controller
{
    public function daftar(){
        return view("datahewan.data");
    }
}

class DataController extends Controller
{
    public function add(){
        return view("data.add");
    }
}