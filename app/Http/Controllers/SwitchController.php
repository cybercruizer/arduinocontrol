<?php

namespace App\Http\Controllers;

use App\Models\SwitchModel;
use Illuminate\Http\Request;

class SwitchController extends Controller
{
    public function index() {
        $switch=SwitchModel::get()->groupBy('category');
        dd($switch);
        return view ('switch.index',$switch);
    }
}
