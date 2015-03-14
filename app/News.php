<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class News extends Model{

	protected $fillable = ['header', 'body'];

    public function image(){
        return $this->hasMany('App\Newsimage');
    }

    public function shorten($num = 500){

        $string = strip_tags($this->body);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }
}
