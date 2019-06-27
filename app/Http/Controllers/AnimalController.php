<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //
    function eat ($food) {
    	return 'animal eat: ' . $food;
    }

    function run (Request $request) {
    	return 'animal run: ' . $request->earth . "$request->a - $request->b - $request->c - $request->d";
    }

    function swimming () {
    	return 'animal swimming';
    }

    function sleep () {
    	return 'animal sleep';
    }
}
