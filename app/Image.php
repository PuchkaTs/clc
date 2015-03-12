<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Image extends Model{

    protected $table = 'images';
    protected $fillable = [ 'image', 'description', 'position'];

    public function project(){
        return $this->belongsTo('App\Project');
    }


}
