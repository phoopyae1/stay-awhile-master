<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RentalProperty;

class RentalController extends Controller
{
    function home() {
      $rental_property = new RentalProperty();
      $data = $rental_property::all();

      return view('index');
    }

    function login() {
      echo "hehe";
    }

}
