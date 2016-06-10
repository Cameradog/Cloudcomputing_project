<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \File;

class ToeicWords extends Controller
{
    public function index() {
      return view('content.index');
    }
}
