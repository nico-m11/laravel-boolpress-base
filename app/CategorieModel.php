<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategorieModel;

class CategorieModel extends Model
{
    protected $table = 'categories';

    public function posts() {
        return $this->hasMany('App\PostModel, ');
    }
}
