<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
      'title' => 'required',
      'country' => 'required',
      'title' => 'required',
      'body' => 'required',
  );

  // Wineモデルに関連付けを行う
  public function histories()
    {
      return $this->hasMany('App\History');

    }
}
