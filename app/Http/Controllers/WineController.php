<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Wine;


class WineController extends Controller
{
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      //$cond_title が空白でない場合は、記事を検索して取得する
      if ($cond_title != '') {
          $posts = Wine::where('title', $cond_title).orderBy('updated_at', 'desc')->get();
      } else {
          $posts = Wine::all()->sortByDesc('updated_at');
      }

      if (count($posts) > 0) {
          $headline = $posts->shift();
      } else {
          $headline = null;
      }

      //wine/index.blade.php ファイルを渡している
      //また View テンプレートに headline、 posts、 cond_title という変数を渡している
      return view('wine.index', ['headline' => $headline, 'posts' => $posts, 'cond_title' => $cond_title]);
  }
}
