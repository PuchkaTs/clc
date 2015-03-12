<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Area extends Model{

	protected $table = 'areas';

	protected $fillable = ['name'];

    public function projects(){
        return $this->hasMany('App\Project');
    }


}
