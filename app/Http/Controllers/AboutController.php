<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index()
  {
    $about = About::all();
    return view(
      'front.index',
      ['about' => $about]
    );
  }
  public function edit()
  {
    $about = About::all();
    return view(
      'admin.about',
      ['about' => $about]
    );
  }


  public function update(About $about)
  {
    dd(request()->all());
  }
}
