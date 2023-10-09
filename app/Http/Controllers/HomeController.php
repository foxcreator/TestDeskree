<?php

namespace App\Http\Controllers;

use App\DeskreeClient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $deskree = new DeskreeClient();
//        $shops = $deskree->getShops()->data;
//        foreach ($shops as $shop) {
//            dd($shop->attributes->name, $shop->uid);
//        }
        dd($deskree->getShops());
    }
}
