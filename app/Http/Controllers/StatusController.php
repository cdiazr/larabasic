<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class StatusController extends Controller
{
    public function index(): Renderable {
        return view("pages.status.index");
    }
}
