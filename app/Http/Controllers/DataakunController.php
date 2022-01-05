<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataakun;


class DataakunController extends Controller
{
    public function index()
    {
       $dataakun = Dataakun::where('user_role_id', '=', 1 )->get();
              return view('dataakun', compact('dataakun'));
    }
}
