<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){

        return view('admin/category/create');
    }

    public function show(){
        return view('admin/category/show');
    }

    public function edit(){
        return view('admin/category/edit');
    }
}
