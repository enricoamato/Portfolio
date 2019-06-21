<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {


    function home() {
        return view('frontend.index.home');
    }

    function test($id) {
        $data = [];
        $data['id'] = $id;

        return view('test', $data);
    }
}
