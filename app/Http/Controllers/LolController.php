<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Officer;

class LolController extends Controller
{
    public function index()
    {
        Officer::create([
            'name'  => 'herlkj'
        ]);



        return 4;
    }
}
