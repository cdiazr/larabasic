<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class SettingController extends Controller
{
    public function index(): Renderable {
        return view("pages.settings.index");
    }
}
