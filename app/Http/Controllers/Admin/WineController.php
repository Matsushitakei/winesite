<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 以下を追記することでWine Modelが扱えるようになる
use App\Wine;

class WineController extends Controller
{
  public function add()
  {
    return view('admin.wine.create');
  }

  public function create(Request $request)
  {
    // 以下を追記
      // Varidationを行う
      $this->validate($request, Wine::$rules);

      $wine = new Wine;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$wine->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $wine->image_path = basename($path);
      } else {
          $wine->image_path = null;
      }

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $wine->fill($form);
      $wine->save();
      // admin/wine/createにリダイレクトする
      return redirect('admin/wine/create');
  }
}
