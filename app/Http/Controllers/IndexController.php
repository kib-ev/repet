<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $title = 'hello';
        $message = 'content';

//        $host = $request->getHttpHost();


        return view('index')->with([
            'title' => $title,
            'message' => $message,
        ]);
    }

    public function _e($text) {
        $translate = array(
            'Home' => 'Главная страница'
        );

        return $translate[$text];
    }
}
