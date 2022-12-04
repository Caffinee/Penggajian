<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // @return \Illuminate\Http\Response

    public function index(){
        return view('dashboard');
    }

    public function jabatan(){
        return view('jabatan');
    }

    public function karyawan(){
        return view('karyawan');
    }

    public function gaji(){
        return view('gaji');
    }

    public function laporan(){
        return view('laporan');
    }
    //
}
