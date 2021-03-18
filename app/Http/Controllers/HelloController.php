<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Class_;

Class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'content' => '自由に入力してください',
        ];
        return view('hello.index', $data);
    }
    public function post(Request $request)
    {
        $content = $request->content;
        $data = [
            'content' => $content . 'と入力しましたね'
        ];
        return view('hello.index', $data);
    }

}