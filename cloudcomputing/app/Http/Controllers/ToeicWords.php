<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ToeicData;

use \File;
use \App;
use \View;
use \Lang;
use \Input;
use \Validator;
use \Redirect;
use Carbon\Carbon;
use Session;

class ToeicWords extends Controller
{
    public function index() {
      $toeicData = ToeicData::orderBy('all','desc')->paginate(10);
      $topTenData = ToeicData::orderBy('all','desc')->take(10)->get();
      return View::make('content.index',[
        'toeicData' => $toeicData,
        'topTenData' => $topTenData,
      ]);
    }
}
