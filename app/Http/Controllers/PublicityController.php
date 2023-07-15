<?php

namespace App\Http\Controllers;

use App\Models\Publicity;
use Illuminate\Http\Request;

class PublicityController extends Controller
{
    public function listPublicity(){
        return Publicity::all();
    }
}