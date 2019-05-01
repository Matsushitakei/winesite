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

  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Wine::where('price', $cond_title)->get();
      } else {
          // それ以外はすべての追加商品を取得する
          $posts = Wine::all();
      }
      return view('admin.wine.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

}
