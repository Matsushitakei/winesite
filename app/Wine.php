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
}
