<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu';
    protected $fillable = ['name', 'position'];


    public function banner()
    {
        return $this->belongsToMany('App\Banner');
    }

}
