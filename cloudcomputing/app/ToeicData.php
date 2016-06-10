<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToeicData extends Model
{
    /**
     * The database table used by the model
     */
    protected $table = 'ToeicData';
    protected $primaryKey = 'id';
    protected $fillable = ['words','all','aa','ar','as','be','ge','sc','ss'];

    public function scopeGetFromId($query,$id){
      return $query->where('id', '=', $id );
    }
}
