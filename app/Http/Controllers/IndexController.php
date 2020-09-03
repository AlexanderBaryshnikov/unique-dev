<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function execute(Request $request)
    {
        if(!$request->method() === 'GET')
            return view('welcome');
        return view('layouts.unique');
    }
}
