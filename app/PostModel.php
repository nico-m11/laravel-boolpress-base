<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostInformationModel;
use App\PostModel;
use App\CategorieModel;
use App\TagModel;
class PostModel extends Model
{
    protected $table = 'Posts';
    
    protected $fillable = ['category_id', 'title', 'author', 'id'];

    public function postInformation(){
        return $this->hasOne('App\PostInformationModel','post_id','id');
    }

    public function categorie() {
        return $this->hasOne('App\CategorieModel', 'id', 'category_id');
    }

    public function tag() {
        return $this->belongsToMany('App\TagModel', 'tag_posts', 'tag_id', 'post_id');
    }
}
