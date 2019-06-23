<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {


    function home() {
        return view('frontend.index.home');
    }

    function test($template_name) {
        $data = [];
        $data['template_name'] = $template_name;

        return view('test', $data);
    }
}
