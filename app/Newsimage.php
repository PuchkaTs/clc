<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Newsimage extends Model{

    protected $table = 'newsimages';
    protected $fillable = [ 'image', 'description'];

    public function news(){
        return $this->belongsTo('App\News');
    }


}
