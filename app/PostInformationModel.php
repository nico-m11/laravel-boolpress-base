<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostModel;

class PostInformationModel extends Model
{
    protected $table = 'posts_information';

    public function posts() {
        return $this->belongsTo('App\PostModel');
    }
}
