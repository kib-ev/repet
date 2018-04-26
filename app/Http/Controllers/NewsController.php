<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $title = 'hello';
        $message = 'content';

        $host = $request->getHttpHost();


        return view('news')->with([
            'title' => $title,
            'message' => $message,
            'host' => $host
        ]);
    }
}
