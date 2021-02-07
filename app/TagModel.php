<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostModel;
class TagModel extends Model
{
    protected $table = 'Tags';

    public function post() {
        return $this->belongsToMany('App\PostModel', 'post_id', 'tag_id');
    }
}
