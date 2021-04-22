<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  // Don't add create and update timestamps in database.
  public $timestamps  = false;
  protected $table = 'item';
  protected $primaryKey = 'item_id';

  /**
   * The card this item belongs to.
   */
  public function photos() {
    return $this->belongsToMany(Photo::class,"item_photo", "item_id", "photo_id");
  }
}