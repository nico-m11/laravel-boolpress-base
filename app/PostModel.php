<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostInformationModel;

class PostModel extends Model
{
    protected $table = 'Posts';

    public function posts(){
        return $this->hasOne('App\PostInformationModel', 'post_id', 'id' );
    }
}
