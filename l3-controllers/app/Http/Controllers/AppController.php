<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function homepage()
    {
        $cities = DB::select('SELECT * FROM city');

        $data = [
            'title' => 'Welcome to my website! Enjoy!',
            'movies' => [
                'LOTR',
                'Matrix',
                'Barbie',
                'Harry Potter and the chamber of secrets'
            ],
            'cities' => $cities
        ];

        return view('homepage', $data);
    }
}

// criei este fx no terminal com o seguinte comando:
// php artisan make:controller AppController