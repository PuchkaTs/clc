<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model{

	protected $table = 'projects';

	protected $fillable = [
        'title',
        'description',
        'available',
        'price',
        'rooms',
        'bathrooms',
        'size',
        'year',
        'area_id'];

    public function shorten($num = 250){

        $string = strip_tags($this->description);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }

    public function area(){
        return $this->belongsTo('App\Area');
    }

    public function image(){
        return $this->hasMany('App\Image');
    }
}
