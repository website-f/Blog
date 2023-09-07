<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.dashboard');
    }

    public function postList() {
        return view('dashboard.post-list');
    }

    public function postEdit() {
        return view('dashboard.post-edit');
    }

    public function postCreate() {
        return view('dashboard.post-create');
    }

    public function postCategory() {
        return view('dashboard.post-category');
    }

    public function authorList() {
        return view('dashboard.author-list');
    }

    public function profileEdit() {
        return view('dashboard.profile-edit');
    }
}
