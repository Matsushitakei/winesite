<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WineController extends Controller
{
  public function add()
  {
    return view('admin.wine.create');
  }

  public function create(Request $request)
  {
      // admin/news/createにリダイレクトする
      return redirect('admin/wine/create');
  }
}
