<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view ('index');
    }
}
