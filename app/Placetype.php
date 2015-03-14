<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Placetype extends Model {

    protected $fillable = [ 'name', 'icon_link'];

    public function places(){
        return $this->hasMany('App\Place');
    }

}
