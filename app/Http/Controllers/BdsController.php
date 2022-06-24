<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BdsController extends Controller
{
    public function index(){
        return response('List of things')->header('Content-Type', 'text/plain');
    }
}
