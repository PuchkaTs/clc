<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model {

    protected $table = 'places';
    protected $fillable = [ 'name', 'xloc', 'yloc'];

    public function type(){
        return $this->belongsTo('App\Placetype', 'placetype_id');
    }

}
