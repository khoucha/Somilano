<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class panierController extends Controller
{
    public function __construct()
    {
        $this->middlewar('auth');
    }
}
