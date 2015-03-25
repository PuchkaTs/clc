<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {


    protected $fillable = ['title', 'video', 'pin', 'description'];

    public function shorten($num = 250){

        $string = strip_tags($this->description);

        $string = str_limit($string, $limit = $num, $end = '...');

        return $string;
    }

}
