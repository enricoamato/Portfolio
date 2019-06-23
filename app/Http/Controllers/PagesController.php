<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {


    function home() {
        return view('frontend.index.home');
    }

    function test($layout, $theme) {
        $data = [];
        $data['layout'] = $layout;
        $data['theme'] = $theme;

        return view('test', $data);
    }
}
