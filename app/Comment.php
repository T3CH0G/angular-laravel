<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
class Comment extends Model {
  /**
   * The database table used by the model.
   *
   * @var string
   */
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['author', 'text'];
}

