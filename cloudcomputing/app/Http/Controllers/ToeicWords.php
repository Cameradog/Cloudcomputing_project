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

    public function aa() {
      $toeicData = ToeicData::orderBy('aa','desc')->paginate(10);
      $topTenData = ToeicData::orderBy('aa','desc')->take(10)->get();
      return View::make('content.aa',[
        'toeicData' => $toeicData,
        'topTenData' => $topTenData,
      ]);
    }

    public function ar() {
      $toeicData = ToeicData::orderBy('ar','desc')->paginate(10);
      $topTenData = ToeicData::orderBy('ar','desc')->take(10)->get();
      return View::make('content.ar',[
        'toeicData' => $toeicData,
        'topTenData' => $topTenData,
      ]);
    }

    public function astro() {
      $toeicData = ToeicData::orderBy('as','desc')->paginate(10);
      $topTenData = ToeicData::orderBy('as','desc')->take(10)->get();
      return View::make('content.as',[
        'toeicData' => $toeicData,
        'topTenData' => $topTenData,
      ]);
    }

    public function be() {
      $toeicData = ToeicData::orderBy('be','desc')->paginate(10);
      $topTenData = ToeicData::orderBy('be','desc')->take(10)->get();
      return View::make('content.be',[
        'toeicData' => $toeicData,
        'topTenData' => $topTenData,
      ]);
    }

    public function ge() {
      $toeicData = ToeicData::orderBy('ge','desc')->paginate(10);
      $topTenData = ToeicData::orderBy('ge','desc')->take(10)->get();
      return View::make('content.ge',[
        'toeicData' => $toeicData,
        'topTenData' => $topTenData,
      ]);
    }

    public function sc() {
      $toeicData = ToeicData::orderBy('sc','desc')->paginate(10);
      $topTenData = ToeicData::orderBy('sc','desc')->take(10)->get();
      return View::make('content.sc',[
        'toeicData' => $toeicData,
        'topTenData' => $topTenData,
      ]);
    }

    public function ss() {
      $toeicData = ToeicData::orderBy('ss','desc')->paginate(10);
      $topTenData = ToeicData::orderBy('ss','desc')->take(10)->get();
      return View::make('content.ss',[
        'toeicData' => $toeicData,
        'topTenData' => $topTenData,
      ]);
    }
}
