<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostInformationModel;
use App\PostModel;
use App\CategorieModel;

class PostModel extends Model
{
    protected $table = 'Posts';

    protected $fillable = ['category_id', 'title', 'author'];

    public function postInformation(){
        return $this->hasOne('App\PostInformationModel','post_id','id');
    }

    public function categorie() {
        return $this->hasOne('App\CategorieModedel', 'category_id');
    }
}
