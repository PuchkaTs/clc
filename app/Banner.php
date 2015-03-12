<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Banner extends Model{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'banners';
    protected $fillable = ['title', 'image', 'description', 'position'];


    public function menu()
    {
        return $this->belongsToMany('App\Menu');
    }

}
