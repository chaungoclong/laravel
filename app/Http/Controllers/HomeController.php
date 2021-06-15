<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menu = ["home", "contact", "about"];
        $favorite = ["a", "b", "c"];
        $data = [
            "menu" => $menu,
            "favorite" => $favorite
        ];

        return view("homes.index", $data);
    }

    public function contact()
    {
        return view("homes.contact");
    }

    public function about()
    {
         return view("homes.about");
    }
}
