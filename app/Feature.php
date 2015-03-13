<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Feature extends Model{

	protected $table = 'features';

	protected $fillable = ['name'];

    public function projects(){
        return $this->belongsToMany('App\Project');
    }


}
