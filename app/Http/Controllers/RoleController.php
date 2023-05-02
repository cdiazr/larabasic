<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class RoleController extends Controller
{
    public function index(): Renderable {
        return view("pages.roles.index");
    }

    public function edit(int $id): Renderable {
        return view("pages.roles.edit", compact('id'));
    }
}
