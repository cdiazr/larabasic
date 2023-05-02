<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class UserController extends Controller
{
    public function index(): Renderable {
        return view("pages.users.index");
    }
}
