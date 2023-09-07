<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('index');
    }
    
    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function categories() {
        return view('categories');
    }

    public function tags() {
        return view('tags');
    }

    public function postList() {
        return view('post-list');
    }

    public function postView() {
        return view('post-view');
    }

    public function search() {
        return view('search');
    }
}
