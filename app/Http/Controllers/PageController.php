<?php namespace app\Http\Controllers;

use app\Http\Requests;
use app\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

    public function about() {
        //$peoples = [];
        $peoples = [
            "a", "a", "a", "a", "a", "a", "a", "a", "a"
        ];
        return view('pages.about', compact('peoples'));
    }

    public function contact() {
        return view('pages.contact');
    }
}
