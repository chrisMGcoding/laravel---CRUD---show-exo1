<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function create() {
        return view('pages.creationIngredients');
    }

    public function store() {
        
    }
}
