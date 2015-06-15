<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

	protected $table ='menus';

    public function getMenu(){
        return $this->published()->orderBy('weight')->get();
    }

    public function scopePublished($query){
        $query->where(['active'=>1]);
    }

}
